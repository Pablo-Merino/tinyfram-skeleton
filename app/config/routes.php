<?php

$app->route("/", "GET", array("SkeletonApp\\Controllers\\MainController", "index"));

$app->setErrorHandler(function($error_array) use($app) {
    return $app->render("error", $error_array);
});