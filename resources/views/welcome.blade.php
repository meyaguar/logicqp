@extends('include.master')


@section('title','LogicQP | Dashboard')


@section('page-title','Dashboard')

<!-- TODO: ACTUALIZAR DASHBOARD POWER BI -->
@section('content')
<iframe width="100%" height="750" title="reporteFacturacion" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=06d1f0c7-470f-4135-bb72-c46a250a4393&autoAuth=true&ctid=1f531266-756a-4ee0-a37d-717dfd8683d1" frameborder="0" allowFullScreen="true"></iframe>
@endsection


@push('script')

<!--<script type="text/javascript" src="{{ url('public/js/dashboard.js') }}"></script> -->

@endpush