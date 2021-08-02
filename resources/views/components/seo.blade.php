@section('seo')
    <title>{{ $title }} | Brosztom.hu</title>

    <meta name="description" content="{{ $description ?? "Csökkentsd az impulzus vásárlásaid, költekezz tudatosan, spórolj hatékonyan! Használd fél évig, és döntsd el utána, hogy megéri-e az árát." }}">

    <meta property="og:title" content="{{ $title }} | Brosztom.hu">
    <meta property="og:description" content="{{ $description ?? "Csökkentsd az impulzus vásárlásaid, költekezz tudatosan, spórolj hatékonyan! Használd fél évig, és döntsd el utána, hogy megéri-e az árát." }}">
@endsection
