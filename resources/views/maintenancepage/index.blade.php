<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>แม็คโครคลิกขอแจ้งปิดปรับปรุงชั่วคราว</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('assets/maintenance/style.css')}}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="maintenance">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12  ">
                        <div class="wrapper text-center">
                            <img src="{{ asset('assets/maintenance/gear.png')}}" class="main-logo">
                            <h3>แม็คโครคลิกขอแจ้งปิดปรับปรุงชั่วคราว เพื่อพัฒนาระบบและเพิ่มประสิทธิภาพการให้บริการ แม็คโครคลิกขออภัยในความไม่สะดวก
                                <br/> ระบบจะเปิดให้บริการอีกครั้งวัน{{ $end_datetime_th }} น.
                            </h3>
                            <br/>
                            <h3>Makroclick is temporarily unavailable to improve the system and enhance customer services. We apologize for any inconvenience this may cause.
                                <br/>Makroclick will be back by {{ $end_datetime_en }}.</h3>
                            <a href="javascript:void(0);" class="makro-logo">
                                <img src="{{ asset('assets/maintenance/makro_logo.png')}}" style="width: 150px">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>