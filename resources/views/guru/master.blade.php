<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@700&family=Exo:wght@500&family=Source+Sans+Pro:wght@600&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Mono&display=swap');
    </style>
    <script src="{{ asset('script.js')}}"></script>
    <style>
        :root {
            --primary: #0ea3a8;
            --dark: #074a4d;
            --gradient: radial-gradient(100% 2187.83% at 0% 50%, #adf9f5 0%, #0190A1 100%);
        }

    </style>
</head>


<body>
    <div class="content">
        <div class="navbar">
            <h1>Aula Guru</h1>
            <ul>
                <li id='home' onclick="location.href='{{ route('guru.home')}}';" onmouseover="hover('homeLogo')"
                onmouseout="hover('homeLogo')">
                    <svg id="homeLogo" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.60742 8.35787L10.1074 2.52454L17.6074 8.35787V17.5245C17.6074 17.9666 17.4318 18.3905 17.1193 18.703C16.8067 19.0156 16.3828 19.1912 15.9408 19.1912H4.27409C3.83206 19.1912 3.40814 19.0156 3.09558 18.703C2.78302 18.3905 2.60742 17.9666 2.60742 17.5245V8.35787Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.60742 19.1912V10.8579H12.6074V19.1912" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span>HOME</span></li>
                <li id="jadwal" onclick="location.href='{{ route('guru.kelas.index')}}';" onmouseover="hover('jadwalLogo')"
                onmouseout="hover('jadwalLogo')">
                    <svg id="jadwalLogo" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.66699 2.5H6.66699C7.55105 2.5 8.39889 2.85119 9.02401 3.47631C9.64914 4.10143 10.0003 4.94928 10.0003 5.83333V17.5C10.0003 16.837 9.73693 16.2011 9.26809 15.7322C8.79925 15.2634 8.16337 15 7.50033 15H1.66699V2.5Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M18.3333 2.5H13.3333C12.4493 2.5 11.6014 2.85119 10.9763 3.47631C10.3512 4.10143 10 4.94928 10 5.83333V17.5C10 16.837 10.2634 16.2011 10.7322 15.7322C11.2011 15.2634 11.837 15 12.5 15H18.3333V2.5Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>KELAS</span></li>
                <li id="tugas" onclick="location.href='{{ route('guru.tugas.index')}}';" onmouseover="hover('tugasLogo')"
                onmouseout="hover('tugasLogo')">
                    <svg id="tugasLogo" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.867 10.1999C17.8052 9.26175 18.3323 7.98927 18.3323 6.66245C18.3323 5.33563 17.8052 4.06315 16.867 3.12495C15.9288 2.18675 14.6563 1.65967 13.3295 1.65967C12.0027 1.65967 10.7302 2.18675 9.79199 3.12495L4.16699 8.74995V15.8333H11.2503L16.867 10.1999Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.3337 6.66663L1.66699 18.3333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>TUGAS</span></li>
                {{-- <li id="absen" onclick="location.href='{{ route('guru.absen')}}';" onmouseover="hover('absenLogo')"
                onmouseout="hover('absenLogo')">
                    <svg id="absenLogo" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.1663 17.5V15.8333C14.1663 14.9493 13.8152 14.1014 13.19 13.4763C12.5649 12.8512 11.7171 12.5 10.833 12.5H4.16634C3.28229 12.5 2.43444 12.8512 1.80932 13.4763C1.1842 14.1014 0.833008 14.9493 0.833008 15.8333V17.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.50033 9.16667C9.34128 9.16667 10.8337 7.67428 10.8337 5.83333C10.8337 3.99238 9.34128 2.5 7.50033 2.5C5.65938 2.5 4.16699 3.99238 4.16699 5.83333C4.16699 7.67428 5.65938 9.16667 7.50033 9.16667Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.167 17.4999V15.8333C19.1664 15.0947 18.9206 14.3773 18.4681 13.7935C18.0156 13.2098 17.3821 12.7929 16.667 12.6083"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.333 2.60828C14.05 2.79186 14.6855 3.20886 15.1394 3.79353C15.5932 4.37821 15.8395 5.0973 15.8395 5.83744C15.8395 6.57758 15.5932 7.29668 15.1394 7.88135C14.6855 8.46603 14.05 8.88303 13.333 9.06661"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>ABSEN</span></li> --}}
                <li id="garis">
                    <div class="garis"></div>
                </li>
                <li id="akun" onclick="location.href='{{ route('guru.akun.index')}}';" onmouseover="hover('akunLogo')"
                onmouseout="hover('akunLogo')">
                    <svg id="akunLogo" width="21" height="21" viewBox="0 0 21 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.0499 5.96283C12.8972 6.11861 12.8117 6.32804 12.8117 6.54617C12.8117 6.76429 12.8972 6.97373 13.0499 7.1295L14.3833 8.46283C14.539 8.61552 14.7485 8.70105 14.9666 8.70105C15.1847 8.70105 15.3942 8.61552 15.5499 8.46283L18.6916 5.32117C19.1106 6.24716 19.2375 7.27886 19.0553 8.27879C18.8731 9.27871 18.3905 10.1994 17.6718 10.9181C16.9531 11.6368 16.0325 12.1194 15.0325 12.3015C14.0326 12.4837 13.0009 12.3569 12.0749 11.9378L6.31659 17.6962C5.98507 18.0277 5.53544 18.2139 5.06659 18.2139C4.59775 18.2139 4.14812 18.0277 3.81659 17.6962C3.48507 17.3646 3.29883 16.915 3.29883 16.4462C3.29883 15.9773 3.48507 15.5277 3.81659 15.1962L9.57493 9.43783C9.1559 8.51184 9.02902 7.48014 9.21121 6.48021C9.3934 5.48029 9.876 4.55963 10.5947 3.84093C11.3134 3.12224 12.234 2.63964 13.234 2.45745C14.2339 2.27526 15.2656 2.40214 16.1916 2.82117L13.0583 5.9545L13.0499 5.96283Z"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>AKUN</span></li>
                </li>
            </ul>
        </div>
        <div id="main">
            <div id="geser"></div>
            <div class="isi">
                <div class="flex-row header">
                @yield('header')
                </div>
                {{-- Alert --}}
                @if(session('errors'))
                <div>
                    <div id='alert' class='normal'>
                        <div class="task-group" style="padding-bottom: 1rem; overflow:hidden">
                            <p style="margin: 0; text-align: center">Terjadi Error:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button id='tutup' type="button" class="close" color='remove' style="max-width: unset">
                                <span aria-hidden="true">Oke</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="garis" style="margin-bottom: 1.5rem; height:unset"></div>
                @endif
                @if(session('success'))
                <div>
                    <div id='alert' class='normal'>
                        <div class="task-group" style="padding-bottom: 1rem; overflow:hidden">
                            <ul style="margin-top:0">
                                <li>{{session('success')}}</li>
                            </ul>
                            <button id='tutup' type="button" class="close" color='info' style="max-width: unset">
                                <span aria-hidden="true">Oke</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="garis" style="margin-bottom: 1.5rem; height:unset"></div>

                @endif
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
