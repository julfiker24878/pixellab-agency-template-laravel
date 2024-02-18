<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Test Page - PixelLab</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card mt-5">
                    <div class="card-header bg-primary">
                        <h2 class="text-white">Test Page</h2>
                    </div>
                    <div class="card-body">
                        <p>{{ $services }}</p>
                        <p>{{ $service_titles }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">

            @foreach($service_titles as $service_title)
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-header bg-primary">
                        <h2 class="text-white">{{ $service_title->title }}</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            
                            <li>{{ $service_title->service }}</li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

