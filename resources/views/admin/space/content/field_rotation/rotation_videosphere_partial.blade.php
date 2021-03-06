@extends('admin.space.content.field_rotation.rotation_modal')

@section('scene-content')
<!-- a-frame //-->
<a-scene embedded style="width:100%" loading-screen="dotsColor: #0080e5; backgroundColor: #FFFFFF">

    <a-assets>
        <img src="{{ asset('public/assets/admin/asset-library/images/loading.png') }}" id="loading">
        <video id="videosphere" src="{{ $uri }}">
    </a-assets>

    <a-camera id="rotation-camera"></a-camera>

    <a-sky id="default-sky" color="#000000"></a-sky>

    <!-- rotate to center video //-->
    <a-videosphere load-videosphere visible="false" rotation="0 -90 0"></a-videosphere>

    <a-entity
        position="0 1.6 -4"
        geometry="primitive: circle; radius: 2"
        material="transparent: true; src: #loading"
        id="image-loading">
        <a-animation
            attribute="rotation"
            dur="5000"
            to="0 0 -360"
            easing="linear"
            repeat="indefinite"
            id="image-loading-anim">
        </a-animation>
    </a-entity>

</a-scene>
<!-- a-frame //-->
@endsection

