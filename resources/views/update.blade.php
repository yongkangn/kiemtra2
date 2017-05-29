<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Xây dựng ứng dụng giải trí" />
    <meta name="author" content="QuocTuan.Info">
    <title>QuocTuan.Info</title>
    <!-- Bootstrap Core CSS -->
    <link type="text/css" rel="stylesheet" href="../stylesheets/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="../stylesheets/blog-home.css" />
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">QuocTuan.Info</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">QuocTuan.Info</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="/dang-bai">Đăng Bài</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/gioi-thieu.html">Giới Thiệu</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/khoa-hoc-lap-trinh.html">Khóa Học</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/lien-he.html">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                <form role="form" method="POST" action="">
                {{csrf_field()}}
                    <h2>Đăng Bài</h2>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-1 col-md-12">
                            <div class="form-group">
                                <input type="text" name="txtFullName" id="txtFullName" class="form-control input-lg" placeholder="Vui lòng nhập họ tên đầy đủ hoặc nickname" tabindex="1" value="{{$data["nickname"]}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtNameYoutube" id="txtVideoName" class="form-control input-lg" placeholder="Vui lòng nhập tên Video" tabindex="2" value="{{$data["namevideo"]}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtLink" id="txtLink" class="form-control input-lg" placeholder="Vui lòng nhập link Youtube" tabindex="2" value="{{$data["linkyoutube"]}}">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Vui lòng nhập địa chỉ Email" tabindex="3" value="{{$data["email"]}}">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="txtIntro" class="form-control input-lg tinymce" rows="4" tabindex="4">{{$data['intro']}}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-12"><input type="submit" value="Cập nhật" class="btn btn-primary btn-block btn-lg"></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center>Copyright &copy; QuocTuan.Info 2017</center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script type="text/javascript" src="javascripts/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    <!-- MyScript -->
    <script type="text/javascript" src="javascripts/myscript.js"></script>
    <script type="text/javascript" src="javascripts/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="javascripts/tinymce/js/tinymce/init-tinymce.js"></script>
</body>
</html>
