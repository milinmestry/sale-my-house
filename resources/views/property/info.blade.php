@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.PROPERTY'))

@section('content')
  @info([
    'title' => trans('site.MESSAGE_TEXT'),
    'message' => trans('site.INFO_MESSAGE'),
    'anchorUrl' => route('seller.create'),
    'anchorLable' => trans('site.BECOME_A_SELLER_TEXT'),
  ])
  @endinfo
@endsection