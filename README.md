# Adminer module for Yii Framework 2

Module to manage database using Adminer (http://www.adminer.org/)

## Usage

Drop the 'adminer' folder into your project's 'module' folder.

And add this to your application configuration:

    'modules' => [
        'adminer' => [
            'class' => 'app\modules\adminer\Module',
            'as access' => [
                'class' => 'yii\filters\AccessControl',
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function () {
                            // Here you define the conditions to make sure it's
                            // only accessible by an administrator, for example.
                            $canAccess = true;
                            return $canAccess;
                        }
                    ],
                ],
            ],
        ],
    ],

Checkout the [Yii 2.0 Authorization Guide](http://www.yiiframework.com/doc-2.0/guide-security-authorization.html) to learn more about the access rules.
