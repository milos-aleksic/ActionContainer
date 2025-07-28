<?php

namespace ZOOlanders\CustomActions;

include_once __DIR__ . '/CustomFunctions.php';

use ZOOlanders\YOOessentials\Form\Action\StandardAction;
use ZOOlanders\YOOessentials\Form\Http\FormSubmissionResponse;

class ContainerAction extends StandardAction
{
    public const NAME = 'containeraction';

    public function __invoke(FormSubmissionResponse $response, callable $next): FormSubmissionResponse
    {
        $config = (object) $this->getConfig();
        $method = $this->config('methodname', null);

        if ($method === '') {
            return $response->withErrors(["Function Name can't be empty"]);
        }
        
        if (!method_exists(CustomFunctions::class, $method)) {
            return $response->withErrors(["Function $method does not exist"]);
        }
        
        $method_response = CustomFunctions::$method($response->submission()->data());

        if ($method_response['success'] === false) {
            return $response->withErrors([$method_response['message']]);
        }
        
        $formData = $response->submission()->data();
        $formData[$method] = (string) $method_response['data'];
        $response->submission()->setData($formData);

        return $next(
            $response->withData([
                $method => [
                    'config' => $config,
                    'data' => (string) $method_response['data'],
                ],
            ])
        );
    }
}
