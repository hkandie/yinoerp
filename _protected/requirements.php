$ php yii help gii/crud

DESCRIPTION

This generator generates a controller and views that implement CRUD
(Create, Read, Update, Delete) operations for the specified data model.


USAGE

yii gii/crud [...options...]


OPTIONS

--appconfig: string
  custom application configuration file path.
  If not set, default application configuration is used.

--baseControllerClass: string (defaults to 'yii\web\Controller')
  This is the class that the new CRUD controller class will extend from. You
  should provide a fully qualified class name, e.g., yii\web\Controller.

--color: boolean, 0 or 1
  whether to enable ANSI color in the output.
  If not set, ANSI color will only be enabled for terminals that support it.

--controllerClass (required): string
  This is the name of the controller class to be generated. You should
  provide a fully qualified namespaced class (e.g.
  app\controllers\PostController), and class name should be in CamelCase with
  an uppercase first letter. Make sure the class is using the same namespace
  as specified by your application's controllerNamespace property.

--enableI18N: boolean, 0 or 1 (defaults to 0)
  This indicates whether the generator should generate strings using Yii::t()
  method. Set this to true if you are planning to make your application
  translatable.

--enablePjax: boolean, 0 or 1 (defaults to 0)
  This indicates whether the generator should wrap the GridView or ListView
  widget on the index page with yii\widgets\Pjax widget. Set this to true if
  you want to get sorting, filtering and pagination without page refreshing.

--indexWidgetType: string (defaults to 'grid')
  This is the widget type to be used in the index page to display list of the
  models. You may choose either GridView or ListView

--interactive: boolean, 0 or 1 (defaults to 1)
  whether to run the command interactively.

--messageCategory: string (defaults to 'app')
  This is the category used by Yii::t() in case you enable I18N.

--modelClass (required): string
  This is the ActiveRecord class associated with the table that CRUD will be
  built upon. You should provide a fully qualified class name, e.g.,
  app\models\Post.

--overwrite: boolean, 0 or 1 (defaults to 0)
  whether to overwrite all existing code files when in non-interactive mode.
  Defaults to false, meaning none of the existing code files will be overwritten.
  This option is used only when `--interactive=0`.

--searchModelClass: string (defaults to '')
  This is the name of the search model class to be generated. You should
  provide a fully qualified namespaced class name, e.g.,
  app\models\PostSearch.

--template: string (defaults to 'default')

--viewPath: string
  Specify the directory for storing the view scripts for the controller. You
  may use path alias here, e.g., /var/www/basic/controllers/views/post,
  @app/views/post. If not set, it will default to @app/views/ControllerID