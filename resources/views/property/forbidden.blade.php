@extends('layouts.first')

@section('title', trans('site.PAGE_TITLE.PROPERTY'))

@section('content')
  @warn([
    'title' => trans('site.FORBIDDEN'), 
    'message' => trans('site.FORBIDDEN_MESSAGE'), 
    'anchorUrl' => route('seller.create'),
    'anchorLable' => trans('site.FORBIDDEN_ANCHOR_LABLE'),
  ])
  @endwarn
@endsection