@extends('layouts.home')

@section('content_dashboard')
    <div class="container">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">GOFUNDING</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/images/logo2.png" alt="First slide">
                    </div>
                    <div class="carousel-item active carousel-item-left">
                      <img class="d-block w-100" src="/images/logo.png" alt="Second slide">
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-left">
                      <img class="d-block w-100" src="/images/logo2.png" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
@endsection
