<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/src/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/src/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/src/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/src/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/src/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/src/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/src/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/src/NullLogger.php',
    'Whoops\\Exception\\ErrorException' => $vendorDir . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
    'Whoops\\Exception\\Formatter' => $vendorDir . '/filp/whoops/src/Whoops/Exception/Formatter.php',
    'Whoops\\Exception\\Frame' => $vendorDir . '/filp/whoops/src/Whoops/Exception/Frame.php',
    'Whoops\\Exception\\FrameCollection' => $vendorDir . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
    'Whoops\\Exception\\Inspector' => $vendorDir . '/filp/whoops/src/Whoops/Exception/Inspector.php',
    'Whoops\\Handler\\CallbackHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
    'Whoops\\Handler\\Handler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/Handler.php',
    'Whoops\\Handler\\HandlerInterface' => $vendorDir . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
    'Whoops\\Handler\\JsonResponseHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
    'Whoops\\Handler\\PlainTextHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
    'Whoops\\Handler\\PrettyPageHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
    'Whoops\\Handler\\XmlResponseHandler' => $vendorDir . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
    'Whoops\\Inspector\\InspectorFactory' => $vendorDir . '/filp/whoops/src/Whoops/Inspector/InspectorFactory.php',
    'Whoops\\Inspector\\InspectorFactoryInterface' => $vendorDir . '/filp/whoops/src/Whoops/Inspector/InspectorFactoryInterface.php',
    'Whoops\\Inspector\\InspectorInterface' => $vendorDir . '/filp/whoops/src/Whoops/Inspector/InspectorInterface.php',
    'Whoops\\Run' => $vendorDir . '/filp/whoops/src/Whoops/Run.php',
    'Whoops\\RunInterface' => $vendorDir . '/filp/whoops/src/Whoops/RunInterface.php',
    'Whoops\\Util\\HtmlDumperOutput' => $vendorDir . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
    'Whoops\\Util\\Misc' => $vendorDir . '/filp/whoops/src/Whoops/Util/Misc.php',
    'Whoops\\Util\\SystemFacade' => $vendorDir . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
    'Whoops\\Util\\TemplateHelper' => $vendorDir . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
    'app\\classes\\Block' => $baseDir . '/app/classes/Block.php',
    'app\\classes\\BlockNoReason' => $baseDir . '/app/classes/BlockNoReason.php',
    'app\\classes\\BlockNotLogged' => $baseDir . '/app/classes/BlockNotLogged.php',
    'app\\classes\\BlockPostRequest' => $baseDir . '/app/classes/BlockPostRequest.php',
    'app\\classes\\Flash' => $baseDir . '/app/classes/Flash.php',
    'app\\classes\\Validate' => $baseDir . '/app/classes/Validate.php',
    'app\\classes\\ValidateEmail' => $baseDir . '/app/classes/ValidateEmail.php',
    'app\\classes\\ValidateMaxlen' => $baseDir . '/app/classes/ValidateMaxlen.php',
    'app\\classes\\ValidateRequired' => $baseDir . '/app/classes/ValidateRequired.php',
    'app\\controllers\\Home' => $baseDir . '/app/controllers/Home.php',
    'app\\controllers\\Login' => $baseDir . '/app/controllers/Login.php',
    'app\\controllers\\Products' => $baseDir . '/app/controllers/Products.php',
    'app\\controllers\\Singup' => $baseDir . '/app/controllers/Singup.php',
    'app\\controllers\\Users' => $baseDir . '/app/controllers/Users.php',
    'app\\core\\AppExtract' => $baseDir . '/app/core/AppExtract.php',
    'app\\core\\ControllerExtract' => $baseDir . '/app/core/ControllerExtract.php',
    'app\\core\\MethodExtract' => $baseDir . '/app/core/MethodExtract.php',
    'app\\core\\MyApp' => $baseDir . '/app/core/MyApp.php',
    'app\\core\\ParamsExtract' => $baseDir . '/app/core/ParamsExtract.php',
    'app\\core\\Uri' => $baseDir . '/app/core/Uri.php',
    'app\\interfaces\\ActiveRecordExecuteInterface' => $baseDir . '/app/interfaces/ActiveRecordExecuteInterface.php',
    'app\\interfaces\\ActiveRecordInterface' => $baseDir . '/app/interfaces/ActiveRecordInterface.php',
    'app\\interfaces\\AppInterface' => $baseDir . '/app/interfaces/AppInterface.php',
    'app\\interfaces\\ControllerInterface' => $baseDir . '/app/interfaces/ControllerInterface.php',
    'app\\models\\User' => $baseDir . '/app/models/User.php',
    'app\\models\\activerecord\\ActiveRecord' => $baseDir . '/app/models/activerecord/ActiveRecord.php',
    'app\\models\\activerecord\\Delete' => $baseDir . '/app/models/activerecord/Delete.php',
    'app\\models\\activerecord\\Find' => $baseDir . '/app/models/activerecord/Find.php',
    'app\\models\\activerecord\\FindAll' => $baseDir . '/app/models/activerecord/FindAll.php',
    'app\\models\\activerecord\\FindBy' => $baseDir . '/app/models/activerecord/FindBy.php',
    'app\\models\\activerecord\\Insert' => $baseDir . '/app/models/activerecord/Insert.php',
    'app\\models\\activerecord\\Update' => $baseDir . '/app/models/activerecord/Update.php',
    'app\\models\\connection\\Connection' => $baseDir . '/app/models/connection/Connection.php',
);
