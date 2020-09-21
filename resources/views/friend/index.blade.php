@extends('layouts.main')
@section('asset-toastr')
<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
@endsection
@section('main')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <!-- Container -->
    <div class="container-fluid">
      <div class="col-md-12 find-text">
        <h3>Friend List
          <span>
            {{-- <a href="" class="btn btn-primary pull-right" data-toggle="modal" data-target="#findFriend">Find Friend</a> --}}
            <div class="col-xs-12">
              <div class="input-group">
                <form action="{{ URL::route('friend') }}" method="GET">
                  <input type="text" class="form-control" placeholder="Search Friend" name="cari">
                  <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </span>
        </h3>
      </div>
      <!-- The modal -->
      <div class="modal fade" id="findFriend" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header title-friend">
              <button type="button" class="close btn-friend-close glyphicon glyphicon-remove" data-dismiss="modal"></button>
              <label for=""> Add Friend </label>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12">
                  <div class="input-group">
                    <form action="{{ URL::route('friend') }}" method="GET">
                      <input type="text" class="form-control" placeholder="Search Friend" name="cari">
                      <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!--Friend List-->
                <div class="col-xs-12 friend-modal">
                  <div class="col-xs-3">
                    <img class="img-friend" src="assets/img/user3.png">
                  </div>
                  <div class="col-xs-4 friend-modal text-friend">
                    <h4>Mystea</h4>
                  </div>
                  <div class="col-xs-5 friend-btn">
                    <input type="button" value="Add Friend" class="btn btn-primary nextBtn pull-right">
                  </div>
                </div>
                <!--End Friend List-->

                <!--Invite Link-->
                <div class="col-xs-12 friend-link">
                  <label for=""> Or, send invite link to a friend</label>
                  <div class="input-group">
                    <input type="text" class="form-control" value="https://getbootstrap.com/docs/4.3/components/forms/" name="q">
                    <div class="input-group-btn">
                      <input type="button" value="Copy" class="btn btn-primary">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Panel Friend List -->
      @forelse ($players as $item)
      <div class="row">
        <div class="col-md-4 friend-page">
          <div class="panel panel-headline panel-friend-detail">
            <div class="panel-body">
              <div class="col-md-6">
                <img class="img-panel-friend" src="assets/img/user3.png">
              </div>
              <div class="col-md-6">
                <h4 class="panel-friend">{{ $item->name }}</h4>
                <h5 class="text-view">View Profil</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
      <div class="row">
        <div class="col-md-4 friend-page">
          <div class="panel panel-headline panel-friend-detail">
            <div class="panel-body">
              <div class="col-md-6">
                <img class="img-panel-friend" src="assets/img/user3.png">
              </div>
              <div class="col-md-6">
                <h4 class="panel-friend">Mystea</h4>
                <h5 class="text-view">View Profil</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforelse
      
      <!-- End Panel Friend List -->
    </div>
    <!-- End Container -->
  </div>
  <!-- END MAIN CONTENT -->
</div>
@endsection