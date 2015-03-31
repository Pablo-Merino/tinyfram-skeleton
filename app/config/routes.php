<?php

$app->route("/", "GET", array("SkeletonApp\\Controllers\\MainController", "index"));
$app->route("/post", "POST", array("SkeletonApp\\Controllers\\MainController", "postTest"));
$app->route("/:name/:test", "GET", array("SkeletonApp\\Controllers\\MainController", "namedRoutes"));

$app->setErrorHandler(function($error_array) use($app) {
    return $app->render("error", $error_array);
});