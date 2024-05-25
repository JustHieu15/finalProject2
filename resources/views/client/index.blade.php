@extends('layouts.client')

@section('title')
    Home
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/client/css/studenttest.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="box2">
            <div class="container">
                <h2
                    style="
                            font-family: Impact, Haettenschweiler,
                                'Arial Narrow Bold', sans-serif;
                        "
                >
                    Blog
                    <i class="fab fa-blogger" style="color: orange"></i>
                </h2>
                <div class="row">
                    <div class="col">
                        <div class="box3">
                            <img src="img/top4-khoi-nganh-1.png" alt=""/>
                            <p>Title</p>
                            <span
                            >Welcome to our elearning blog! Here, we
                                    focus on sharing knowledge, experience and
                                    learning materials related to diverse topics
                                    in the field of online education</span
                            >
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-2">
                            <div class="col">
                                <img
                                    src="img/dai-hoc-fpt-1-1659081213-910x607.jpg"
                                    alt=""
                                />
                                <p>title</p>
                            </div>
                            <div class="col">
                                <img
                                    src="img/5-xu-huong-e-learning-dinh-hinh-nam-2021-1.png"
                                    alt=""
                                />
                                <p>title</p>
                            </div>
                            <div class="col">
                                <img
                                    src="img/Doanh-nghiệp-làm-gì-để-đánh-giá-hiệu-quả-khóa-học-E-learning.png"
                                    alt=""
                                />
                                <p>title</p>
                            </div>
                            <div class="col">
                                <img
                                    src="img/e-learning-website-01-scaled.jpg"
                                    alt=""
                                />
                                <p>title</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box4">
            <h2
                style="
                        font-family: Impact, Haettenschweiler,
                            'Arial Narrow Bold', sans-serif;
                    "
            >
                Test
                <i class="fas fa-clipboard-list" style="color: orange"></i>
            </h2>
{{--            <div class="box5">--}}
{{--                <div class="row align-items-start">--}}
{{--                    <div class="col">--}}
{{--                        <div--}}
{{--                            class="card"--}}
{{--                            style="width: 18rem; height: auto"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://i.pinimg.com/originals/12/df/41/12df410c77880bff319901ab43489d4b.jpg"--}}
{{--                                style="height: 200px"--}}
{{--                                class="card-img-top"--}}
{{--                                alt="..."--}}
{{--                            />--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Biology</h5>--}}
{{--                                <p class="card-text">time</p>--}}
{{--                                <a--}}
{{--                                    href="{{ route('test.show', 'science-test') }}"--}}
{{--                                    class="btn"--}}
{{--                                    style="--}}
{{--                                            background-color: orange;--}}
{{--                                            color: white;--}}
{{--                                        "--}}
{{--                                >Take test</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div--}}
{{--                            class="card"--}}
{{--                            style="width: 18rem; height: auto"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://i.pinimg.com/736x/72/ce/2c/72ce2c38b1b1b7f4548522b5ee1c8778.jpg"--}}
{{--                                class="card-img-top"--}}
{{--                                style="height: 200px"--}}
{{--                                alt="..."--}}
{{--                            />--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Chemistry</h5>--}}
{{--                                <p class="card-text">time</p>--}}
{{--                                <a--}}
{{--                                    href="{{ route('test.show', 'science-test') }}"--}}
{{--                                    class="btn"--}}
{{--                                    style="--}}
{{--                                            background-color: orange;--}}
{{--                                            color: white;--}}
{{--                                        "--}}
{{--                                >Take test</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col">--}}
{{--                        <div--}}
{{--                            class="card"--}}
{{--                            style="width: 18rem; height: auto"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://english4u.com.vn/Uploads/images/music.jpg"--}}
{{--                                class="card-img-top"--}}
{{--                                style="height: 200px"--}}
{{--                                alt="..."--}}
{{--                            />--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Music</h5>--}}
{{--                                <p class="card-text">time</p>--}}
{{--                                <a--}}
{{--                                    href="{{ route('test.show', 'science-test') }}"--}}
{{--                                    class="btn"--}}
{{--                                    style="--}}
{{--                                            background-color: orange;--}}
{{--                                            color: white;--}}
{{--                                        "--}}
{{--                                >Take test</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="box6">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col">--}}
{{--                        <div--}}
{{--                            class="card"--}}
{{--                            style="width: 18rem; height: auto"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://img.hoidap247.com/picture/answer/20200924/large_1600925843452.jpg"--}}
{{--                                class="card-img-top"--}}
{{--                                style="height: 200px"--}}
{{--                                alt="..."--}}
{{--                            />--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">English</h5>--}}
{{--                                <p class="card-text">time</p>--}}
{{--                                <a--}}
{{--                                    href="{{ route('test.show', 'science-test') }}"--}}
{{--                                    class="btn"--}}
{{--                                    style="--}}
{{--                                            background-color: orange;--}}
{{--                                            color: white;--}}
{{--                                        "--}}
{{--                                >Take test</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <div--}}
{{--                            class="card"--}}
{{--                            style="width: 18rem; height: auto"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://alphahistory.com/frontpages/wp-content/uploads/2014/04/whatishistory-e1699920269113.jpg"--}}
{{--                                class="card-img-top"--}}
{{--                                style="height: 200px"--}}
{{--                                alt="..."--}}
{{--                            />--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">History</h5>--}}
{{--                                <p class="card-text">time</p>--}}
{{--                                <a--}}
{{--                                    href="{{ route('test.show', 'science-test') }}"--}}
{{--                                    class="btn"--}}
{{--                                    style="--}}
{{--                                            background-color: orange;--}}
{{--                                            color: white;--}}
{{--                                        "--}}
{{--                                >Take test</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <div--}}
{{--                            class="card"--}}
{{--                            style="width: 18rem; height: auto"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://storage.timviec365.vn/timviec365/pictures/images/tin-hoc-van-phong-tieng-anh%20(1).jpg"--}}
{{--                                class="card-img-top"--}}
{{--                                style="height: 200px"--}}
{{--                                alt="..."--}}
{{--                            />--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Informatics</h5>--}}
{{--                                <p class="card-text">time</p>--}}
{{--                                <a--}}
{{--                                    href="{{ route('test.show', 'science-test') }}"--}}
{{--                                    class="btn"--}}
{{--                                    style="--}}
{{--                                            background-color: orange;--}}
{{--                                            color: white;--}}
{{--                                        "--}}
{{--                                >Take test</a--}}
{{--                                >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row">
                @foreach($tests as $test)
                    <div class="col-4">
                        <div
                            class="card"
                            style="width: 18rem; height: auto"
                        >
                            <img
                                src="https://storage.timviec365.vn/timviec365/pictures/images/tin-hoc-van-phong-tieng-anh%20(1).jpg"
                                class="card-img-top"
                                style="height: 200px"
                                alt="..."
                            />
                            <div class="card-body">
                                <h5 class="card-title">{{ $test->name }}</h5>
                                <p class="card-text">{{ $test->time_limit }}</p>
                                <a
                                    href="{{ route('test.show', $test->slug) }}"
                                    class="btn"
                                    style="
                                            background-color: orange;
                                            color: white;
                                        "
                                >Take test</a
                                >
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="box7">
                <h2
                    style="
                            font-family: Impact, Haettenschweiler,
                                'Arial Narrow Bold', sans-serif;
                        "
                >
                    Subject
                    <i class="far fa-file" style="color: orange"></i>
                </h2>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="box-img1">
                            <img src="img/Mathematics.png" alt=""/> <br/>
                            <span>Mathematics</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-img">
                            <img src="img/Literature.png" alt=""/> <br/>
                            <span>Literature</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-img1">
                            <img src="img/English.png" alt=""/> <br/>
                            <span>English</span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col">
                        <div class="box-img">
                            <img src="img/Biology.png" alt=""/> <br/>
                            <span>Biology</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-img1">
                            <img src="img/Chemistry.png" alt=""/> <br/>
                            <span>Chemistry</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-img">
                            <img src="img/Physics.png" alt=""/> <br/>
                            <span>Physics</span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col">
                        <div class="box-img1">
                            <img src="img/Civic Education.png" alt=""/>
                            <br/>
                            <span>Civic Education</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-img">
                            <img src="img/History.png" alt=""/> <br/>
                            <span>History</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-img1">
                            <img src="img/Geography.png" alt=""/> <br/>
                            <span>Geography</span>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="box-img1">
                            <img src="img/Informatics.png" alt=""/> <br/>
                            <span>Informatics</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-img1">
                            <img src="img/Music.png" alt=""/> <br/>
                            <span>Music</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
