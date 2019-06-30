<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <script src="/templates/ecabtmpl/js/jquery-3.3.1.min.js"></script>
    <script src="/templates/ecabtmpl/js/popper.min.js"></script>
    <script src="/templates/ecabtmpl/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/templates/ecabtmpl/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templates/ecabtmpl/css/template.css">

    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <?php if ($this->countModules('logo_project')) { ?>
                <jdoc:include type="modules" name="logo_project" style="block"/>
            <?php } ?>
            <div>
                <?php if ($this->countModules('menu')) { ?>
                    <jdoc:include type="modules" name="menu" style="block"/>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-9">

                </div>
                <div class="col-3">
                    <?php if ($this->countModules('user_info')) { ?>
                        <jdoc:include type="modules" name="user_info" style="block"/>
                    <?php } ?>
                    {User_info}
                </div>
            </div>
            <div id="content">
                <jdoc:include type="component"/>
            </div>
        </div>
    </div>
</div>
</body>
</html>