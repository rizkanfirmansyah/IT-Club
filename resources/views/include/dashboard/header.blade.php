
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="{{asset('home_page/img/favicon.png')}}" type="image/png" sizes="32x32">
  <meta name="csrf-token" data-token="{{ csrf_token() }}">
  <title>Dashboard &mdash; ITClub</title>

  {{--!NOTE memanggil assets css dashboard  --}}
  @include('assets.dashboard.css')

</head>
