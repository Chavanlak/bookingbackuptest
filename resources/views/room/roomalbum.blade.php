<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Room booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <style>
        body {
            font-family: "Anuphan", serif;
        }

        div {
            font-family: "Anuphan", serif;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .scrollable{
            overflow-y: auto;
            max-height: 200px;
            min-height: 200px;
        }
    </style>


</head>

<body>



    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">ระบบจองห้องประชุม</h1>
                    <p class="lead text-muted">กรุณาเลือกห้องที่ต้องการจอง หรือกลับไปที่หน้า <a href="/home">Home</a></p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($roomList as $room)
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">picture</text>
                                </svg>

                                <div class="card-body scrollable">
                                    <p class="card-title fw-bold">{{ $room->roomName }}</p>
                                    <div class="card-text">

                                        @foreach ($bookingList as $booking)
                                            @foreach ($booking as $bb)
                                                @if ($bb->roomId == $room->roomId)
                                                    <p class="text-decoration-underline">{{$bb->bookingAgenda}}</p>
                                                    <p>{{$bb->bookingTimeStart."-".$bb->bookingTimeFinish}}</p>
                                                    <p>{{$bb->firstName." ".$bb->Department }}</p>
                                                    {{-- <p>{{$bb->firstName." ".$bb->lastName }}</p> --}}
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>

                                </div>
                                <div class="card-footer text-muted">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/booking/{{ $room->roomId }}"
                                                class="btn btn-sm btn-outline-secondary">จองห้อง</a>
                                            {{-- <a href="#" class="btn btn-sm btn-outline-secondary">รายละเอียด</a> --}}
                                        </div>
                                        <small class="text-muted">reservertion:8</small>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>
