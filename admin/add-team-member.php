<!DOCTYPE HTML>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <?php require("components/side-bar.php") ?>
    <main class="main-wrap">
        <?php require("components/header.php") ?>
        <section class="content-main">
            <form method="post" action="scripts/add-member.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-9">
                        <div class="content-header">
                            <h2 class="content-title">Add New Member</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Team Member</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="member_name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" required class="form-control" id="member_name" name="member_name">
                                </div>
                                <div class="mb-4">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" placeholder="Type here" required class="form-control" id="designation" name="designation">
                                </div>
                                <div class="mb-4">
                                    <label for="facebook" class="form-label">Facebook Bio</label>
                                    <input type="text" placeholder="Facebook bio link" class="form-control" id="facebook" name="facebook">
                                </div>
                                <div class="mb-4">
                                    <label for="instagram" class="form-label">Instagram Bio</label>
                                    <input type="text" placeholder="Instagram bio link" class="form-control" id="instagram" name="instagram">
                                </div>
                                <div class="mb-4">
                                    <label for="twitter" class="form-label">X Bio</label>
                                    <input type="text" placeholder="X bio link" class="form-control" id="twitter" name="twitter">
                                </div>
                                <input class="btn btn-md rounded font-sm hover-up" type="submit" value="Add Member">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Media</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-upload">
                                    <img src="assets/imgs/theme/upload.svg" alt="">
                                    <input class="form-control" type="file" name="image" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Evara - T-Shirts .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>