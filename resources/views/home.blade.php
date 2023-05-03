@extends('frontend.layouts.layout')

@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@elseif($message = Session::get('danger'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@elseif($message = Session::get('info'))
<div class="alert alert-info alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
<section class="page-user-profile">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="user-profile-images">
                    <!-- user timeline image -->
                    <img src="{{ asset('apexnew/app-assets/img/banner/profile-image.jpg')}}" class="img-fluid rounded-top user-timeline-image" alt="User Timeline Image">
                    <!-- user profile image -->
                    <img src="{{ asset('apexnew/app-assets/img/kartu.jpg')}}" class="user-profile-image rounded mb-2" alt="User Profile Image" height="100" width="140">
                </div>
                <div class="user-profile-text">
                    <h4 class="profile-text-color mb-0">{{ucfirst(Auth::user()->name)}}</h4>
                    <!-- <small>Devloper</small> -->
                </div>
                <!-- user profile body start -->
                <div class="card-content">
                    <div class="card-body">
                        <div class="user-profile-buttons d-flex justify-content-center justify-content-sm-start">
                            <!-- <button type="button" data-toggle="modal" data-target="#kartu" class="btn btn-primary mr-3"><i class="fa fa-plus"></i> Kartu</button> -->
                            <button type="button" data-toggle="modal" data-id="{{Auth::user()->id}}" class="btn bg-light-primary edit-profile">Edit Profile</button>
                        </div>
                    </div>
                    <!-- user profile body ends --> 
                </div>
            </div>
        </div>
    </div>
    <!-- Profile posts and info starts -->
    <div class="row profile-info-posts">
        <!-- 1st column starts -->
        <div class="col-lg-3 col-12">
            <div class="row">
                <!-- About starts -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title m-0">About</h4>
                            <span class="cursor-pointer"><i class="ft-more-vertical-"></i></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="m-0">{{$data_alamat->alamat}}</p>
                                <p class="m-0">{{Auth::user()->email}}</p>
                                <p class="m-0">{{$data_alamat->no_telp}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About ends -->
            </div>
        </div>
        <!-- 1st column ends -->
        <!-- 2nd column starts -->
        <div class="col-lg-6 col-12">
            <div class="row">
                <!-- Post starts -->
                <div class="col-12">
                    <div class="card profile-post overflow-hidden">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title m-0">Kartu Anda</h4>
                            <button type="button" data-toggle="modal" data-target="#kartu" class="btn btn-sm text-right ml-5">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="list-group">
                                    <?php $no = 1 ?>
                                    @forelse($data_kartu as $kartu)
                                    <li class="list-group-item">
                                        <span class="badge badge-info mr-4">{{$kartu->bank}}</span>{{$kartu->kartu}}<span class="badge badge-info float-right">@if($kartu->jumlah_transaksi != 0){{ $kartu->jumlah_transaksi }} @else 0 @endif</span>
                                    </li>
                                    <?php $no++ ?>
                                    @empty
                                    <li class="list-group-item"><p>No data</p></li>                                    
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post ends -->
            </div>
        </div>
        <!-- 2nd column ends -->
        <!-- 3rd column starts -->
        <div class="col-lg-3 col-12">
            <div class="row">
                <!-- Trophy starts -->
                <div class="col-12">
                    <div class="card bg-primary white">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media py-1">
                                    <i class="ft-award font-large-2"></i>
                                    <div class="ml-1 media-body">
                                        <h5 class="white">Total transaksi {{$total}}</h5>
                                        <p class="font-small-2 m-0">Perbanyak transaksi untuk mendapat berbagai penawaran menarik kami.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Trophy ends -->
            </div>
        </div>
        <!-- 3rd column ends -->
    </div>
    <!-- Profile posts and info ends -->
</section>
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.edit-profile').click(function(){
            let id = $(this).data('id')
            // $('#profile').modal('show')
            // console.log(edit)
            $.ajax({
                url:"kartu/"+id+"/edit",
                type: "GET",
                dataType: "JSON",
                success:function(data){
                    $('#profile').modal('show')
                    // console.log(data)
                    $('#alamat').val(data[0].alamat)
                    $('#telpon').val(data[0].no_telp)
                }
            })
        })

        $('#password, #password_confirm').on('keyup', function(){
            if($('#password').val() == $('#password_confirm').val()){
                $('#message').addClass('text-success').html('Password Sama').css('visibility','')
                $('#save').attr('disabled',false)
            }else{
                $('#message').addClass('text-danger').html('Password Tidak Sama').css('visibility','')
                $('#save').attr('disabled',true)
            }
        })

        $('#close').click(function(){
            $('#message').css('visibility','hidden')
            $('#save').attr('disabled',false)
        })
    })    
</script>
@endpush
@endsection
