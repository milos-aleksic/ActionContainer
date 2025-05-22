# ActionContainer
Custom Actions container for ZOOlanders' Essentials Form, expand it to build your own actions


In order to be able to use this Action Container, you need to have a child theme. You can find more informaiton regarding child themes on YOOtheme site: https://yootheme.com/support/yootheme-pro/joomla/developers-child-themes

Follow this steps to enable the Action Container
- Download ZIP from this Github
- Unzpi it, you should end up with a folder called ActionContainer-main, remove -main for better reading
- Create a folder within your child theme called *modules*
- Create a file within your child theme called config.php
- Add the follwoing code there: https://yootheme.com/support/yootheme-pro/joomla/developers-child-themes#extend-functionality
~~~
  <?php
  
  $app->load(__DIR__ . '/modules/*/bootstrap.php');
  
  return [];
~~~
- Upload the unzpipped folder to modules folder.
- Add an instance of Action Container to your form, by default it is set to work with the sample function located in CustomFunctions.php, you can create new functions and use their names to trigger different actions.
