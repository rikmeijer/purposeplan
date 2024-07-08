<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config("app.name")}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="124" height="130" viewBox="250 400 575 300" xml:space="preserve"><defs></defs><g transform="matrix(0 0 0 0 0 0)" id="fb464e70-39cf-4563-a587-3bb52cfbacf4"></g><g transform="matrix(1 0 0 1 540 540)" id="77371af7-6e3e-4b82-8c93-2e5fb6bee20a"><rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1; visibility: hidden;" vector-effect="non-scaling-stroke" x="-540" y="-540" rx="0" ry="0" width="1080" height="1080" /></g><g transform="matrix(1 0 0 1 540 540)"><g style="" vector-effect="non-scaling-stroke">		<g transform="matrix(0.13 0 0 -0.13 -207.15 -195.81)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-977.05, -4034.17)" d="M 958 4048 C 950 4027 960 4010 982 4010 C 996 4010 1001 4016 998 4032 C 995 4057 965 4068 958 4048 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 3.22 3.23)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2604.86, -2506.19)" d="M 3498 3924 C 3322 3892 3007 3768 2976 3718 C 2951 3677 2986 3682 3095 3735 C 3244 3807 3359 3846 3493 3869 C 3777 3918 4069 3840 4294 3654 C 4440 3532 4572 3296 4569 3160 L 4569 3125 L 4551 3175 C 4541 3203 4514 3265 4491 3315 C 4454 3395 4438 3416 4347 3505 C 4165 3682 3994 3754 3724 3767 C 3576 3774 3475 3760 3337 3716 C 3095 3636 2901 3531 2660 3345 C 2284 3056 2113 2950 1873 2858 C 1766 2817 1764 2816 1608 2812 C 1418 2807 1382 2816 1289 2894 C 1105 3048 1049 3131 1049 3251 C 1049 3286 1055 3336 1063 3361 C 1076 3404 1148 3522 1170 3535 C 1184 3544 1183 3560 1168 3560 C 1144 3560 1062 3461 1030 3394 C 1002 3334 997 3314 996 3240 C 995 3165 998 3149 1023 3101 C 1059 3033 1133 2954 1184 2928 C 1206 2917 1248 2883 1277 2854 C 1346 2785 1420 2760 1560 2759 C 1680 2757 1730 2765 1860 2802 C 1993 2841 2096 2889 2235 2976 C 2345 3045 2395 3080 2584 3220 C 2730 3329 2886 3440 2894 3440 C 2897 3440 2930 3459 2967 3482 C 3143 3590 3373 3675 3558 3701 C 3698 3721 3894 3696 4043 3640 C 4164 3594 4337 3452 4415 3334 C 4505 3199 4556 2988 4532 2848 C 4519 2774 4501 2732 4508 2793 C 4510 2811 4507 2859 4500 2900 C 4494 2941 4485 3008 4480 3048 C 4461 3198 4354 3361 4209 3460 C 3943 3643 3654 3676 3333 3562 C 3115 3484 3000 3419 2706 3211 C 2657 3177 2587 3125 2551 3096 C 2515 3067 2465 3029 2440 3011 C 2415 2994 2350 2946 2295 2905 C 2240 2864 2175 2819 2150 2805 C 2061 2753 1901 2690 1794 2664 C 1695 2640 1674 2638 1563 2644 C 1415 2652 1332 2675 1231 2738 C 1126 2803 1003 2928 960 3014 C 927 3080 926 3087 925 3194 C 925 3286 929 3315 948 3365 C 996 3493 1121 3616 1225 3639 C 1282 3652 1288 3658 1268 3678 C 1248 3698 1188 3691 1125 3661 C 1051 3627 982 3553 934 3458 C 881 3353 867 3283 873 3161 C 878 3062 880 3052 925 2963 C 966 2879 980 2862 1060 2792 C 1171 2696 1252 2652 1405 2605 C 1516 2571 1532 2568 1615 2573 C 1665 2576 1748 2588 1800 2599 C 2023 2645 2381 2799 2585 2934 C 3057 3248 3257 3351 3510 3412 C 3604 3434 3752 3438 3851 3420 C 4070 3380 4286 3225 4400 3025 C 4434 2966 4460 2842 4460 2740 C 4460 2659 4443 2643 4435 2716 C 4417 2872 4380 2972 4306 3069 C 4238 3157 4187 3197 4065 3256 C 3830 3370 3626 3370 3320 3255 C 3190 3206 3055 3137 2848 3015 C 2839 3010 2774 2965 2703 2915 C 2444 2732 2314 2657 2105 2568 C 1848 2459 1718 2434 1410 2436 C 1170 2438 1088 2465 910 2600 C 728 2739 640 2920 640 3153 C 640 3256 658 3341 703 3452 C 751 3569 794 3634 886 3724 C 998 3835 1081 3869 1236 3870 C 1385 3870 1489 3833 1544 3758 C 1569 3723 1559 3712 1525 3738 C 1487 3768 1417 3789 1313 3799 C 1142 3817 1038 3778 917 3651 C 841 3571 790 3485 750 3370 C 731 3316 727 3283 727 3175 C 726 2975 760 2887 890 2747 C 972 2660 1025 2623 1135 2579 C 1207 2550 1221 2548 1284 2554 C 1391 2564 1389 2575 1276 2595 C 1143 2618 1038 2680 923 2803 C 859 2872 811 2959 789 3043 C 772 3112 782 3289 809 3370 C 869 3558 1020 3710 1175 3739 C 1258 3755 1430 3718 1504 3669 C 1562 3630 1590 3579 1590 3510 C 1590 3411 1525 3340 1433 3340 C 1396 3340 1396 3340 1419 3324 C 1452 3301 1520 3311 1571 3346 C 1632 3388 1662 3447 1668 3535 C 1682 3760 1504 3921 1240 3923 C 1149 3924 1064 3902 966 3853 C 890 3815 764 3681 708 3580 C 593 3372 558 3195 595 3004 C 633 2806 698 2695 849 2569 C 1010 2435 1080 2406 1315 2379 C 1434 2365 1668 2373 1790 2394 C 2063 2443 2383 2606 2820 2921 C 2909 2985 3199 3135 3330 3185 C 3433 3224 3624 3260 3731 3260 C 3816 3260 3962 3235 4016 3211 C 4123 3163 4236 3068 4295 2975 C 4372 2855 4409 2608 4367 2498 C 4339 2425 4331 2441 4351 2528 C 4361 2570 4370 2621 4370 2640 C 4370 2749 4290 2936 4213 3008 C 4154 3063 4042 3128 3965 3152 C 3932 3163 3865 3175 3815 3180 C 3704 3190 3538 3165 3427 3121 C 3354 3092 3171 2996 3115 2957 C 3042 2907 2851 2762 2810 2727 C 2769 2692 2668 2621 2467 2487 C 2307 2382 1961 2232 1800 2199 C 1709 2181 1672 2179 1486 2182 C 1275 2186 1275 2187 1169 2222 C 1021 2272 859 2359 760 2440 C 735 2460 704 2483 690 2490 C 666 2503 666 2502 679 2484 C 750 2391 884 2291 1025 2225 C 1195 2147 1476 2106 1699 2128 C 1932 2151 2157 2229 2414 2375 C 2556 2455 2782 2608 2926 2720 C 3159 2903 3313 2991 3515 3059 C 3673 3112 3746 3123 3857 3110 C 3925 3103 3962 3092 4032 3058 C 4135 3010 4186 2961 4246 2855 C 4285 2785 4285 2785 4284 2675 C 4284 2582 4280 2556 4259 2505 C 4198 2358 4070 2209 3901 2088 C 3793 2010 3665 1943 3430 1840 C 3082 1688 2752 1528 2595 1433 C 2434 1337 2195 1223 2065 1181 C 1954 1145 1784 1111 1633 1094 C 1598 1091 1573 1084 1576 1079 C 1586 1062 1858 1092 1990 1126 C 2042 1139 2090 1150 2098 1150 C 2131 1150 2355 1249 2552 1351 C 2937 1550 3227 1684 3499 1792 C 4054 2012 4344 2250 4549 2656 C 4594 2746 4620 2865 4627 3015 C 4634 3171 4622 3255 4576 3366 C 4514 3517 4415 3643 4270 3753 C 4077 3899 3755 3971 3498 3924 z M 3786 3560 C 3903 3545 3975 3524 4065 3479 C 4224 3398 4319 3306 4395 3162 C 4431 3093 4422 3085 4381 3149 C 4336 3218 4216 3330 4131 3380 C 4092 3403 4019 3436 3968 3453 C 3889 3479 3856 3484 3743 3488 C 3601 3493 3526 3484 3393 3445 C 3245 3403 3036 3298 2855 3177 C 2760 3114 2379 2870 2356 2858 C 2317 2838 2408 2925 2485 2981 C 2526 3010 2606 3069 2662 3111 C 2917 3299 3073 3393 3237 3458 C 3483 3556 3619 3581 3786 3560 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 -244.94 -162.26)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-693.86, -3781.98)" d="M 686 3797 C 659 3761 654 3745 669 3735 C 680 3729 714 3774 724 3808 C 735 3841 715 3835 686 3797 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 -267.56 -82.54)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-525.72, -3172.79)" d="M 583 3642 C 540 3584 472 3404 448 3290 C 411 3113 437 2894 512 2745 C 528 2712 546 2681 552 2675 C 558 2670 555 2680 545 2699 C 489 2811 455 3022 469 3181 C 482 3324 550 3550 607 3637 C 635 3680 614 3685 583 3642 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 -55.59 -101.46)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2132.15, -3318.5)" d="M 2841 3644 C 2802 3622 2713 3562 2475 3395 C 2369 3321 2241 3237 2209 3219 C 2096 3158 2045 3134 1952 3096 C 1780 3026 1730 3016 1532 3016 C 1398 3015 1363 3012 1376 3003 C 1404 2983 1531 2967 1620 2973 C 1727 2981 1905 3028 2026 3081 C 2118 3121 2366 3264 2405 3299 C 2435 3326 2660 3486 2778 3563 C 2870 3624 2901 3652 2888 3665 C 2886 3667 2865 3658 2841 3644 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 13.65 47.36)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2665.81, -2190.35)" d="M 3963 2955 C 3946 2922 3923 2885 3912 2874 C 3901 2862 3877 2826 3859 2794 C 3840 2761 3798 2701 3765 2660 C 3732 2619 3683 2555 3656 2518 C 3603 2442 3429 2273 3332 2202 C 3297 2176 3238 2130 3201 2100 C 3099 2015 2803 1813 2672 1737 C 2506 1641 2384 1584 2240 1534 C 1955 1436 1763 1401 1483 1396 C 1405 1395 1338 1391 1334 1388 C 1329 1382 1347 1379 1450 1367 C 1497 1361 1786 1377 1880 1391 C 2106 1422 2428 1537 2650 1665 C 2806 1755 2826 1767 2963 1864 C 3025 1907 3101 1960 3132 1981 C 3163 2002 3208 2037 3233 2057 C 3258 2078 3323 2130 3379 2174 C 3561 2316 3728 2504 3878 2733 C 3974 2881 4002 2940 3998 2982 L 3995 3015 L 3963 2955 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 -16.02 26.16)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2445.82, -2355.74)" d="M 3695 2915 C 3668 2907 3596 2877 3535 2847 C 3438 2799 3375 2757 3181 2607 C 3161 2591 3103 2539 3051 2492 C 2922 2372 2723 2215 2610 2143 C 2533 2094 2358 2010 2280 1985 C 2250 1976 2216 1962 2204 1955 C 2149 1920 1799 1830 1725 1831 L 1675 1832 L 1719 1846 C 1794 1869 1795 1883 1721 1876 C 1687 1872 1609 1865 1550 1860 C 1488 1855 1428 1844 1411 1836 C 1348 1803 1130 1821 1069 1864 C 1038 1886 1008 1885 1012 1863 C 1014 1853 1030 1842 1050 1837 C 1069 1832 1105 1820 1130 1810 C 1196 1784 1741 1772 1845 1794 C 2008 1829 2348 1949 2500 2025 C 2571 2061 2785 2203 2830 2244 C 2849 2262 2899 2303 2940 2335 C 2981 2368 3065 2438 3127 2493 C 3241 2593 3410 2721 3488 2767 C 3512 2781 3575 2811 3628 2833 C 3713 2869 3735 2874 3803 2875 C 3866 2875 3880 2878 3880 2890 C 3880 2899 3875 2911 3868 2918 C 3852 2934 3758 2932 3695 2915 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 131.16 38.75)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-3530.71, -2260.38)" d="M 4137 2778 C 4076 2675 4031 2615 3920 2485 C 3779 2319 3738 2268 3743 2264 C 3750 2256 3803 2280 3839 2307 C 3857 2321 3869 2326 3864 2318 C 3836 2269 3500 2031 3360 1960 C 3245 1902 2847 1660 2854 1652 C 2862 1645 2917 1668 2980 1706 C 3010 1723 3078 1760 3130 1787 C 3182 1814 3275 1865 3335 1899 C 3396 1934 3474 1978 3510 1997 C 3546 2017 3616 2060 3665 2093 C 3715 2127 3771 2165 3790 2178 C 3834 2207 3918 2287 3975 2355 C 4033 2423 4132 2599 4168 2697 C 4200 2784 4217 2870 4202 2870 C 4197 2870 4168 2828 4137 2778 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 125.57 24.12)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-3472.64, -2384.65)" d="M 3451 2401 C 3432 2389 3445 2360 3468 2360 C 3495 2360 3513 2383 3498 2398 C 3484 2412 3470 2413 3451 2401 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 -55.93 75.28)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-2116.94, -1999.16)" d="M 2265 2054 C 2210 2028 2103 1988 2026 1964 C 1950 1940 1880 1915 1871 1910 C 1841 1892 1912 1899 1965 1919 C 1993 1930 2051 1952 2095 1968 C 2188 2003 2370 2087 2370 2095 C 2370 2102 2373 2104 2265 2054 z" stroke-linecap="round" /></g>		<g transform="matrix(0.13 0 0 -0.13 -214.05 89.62)"><path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke" transform=" translate(-925, -1893.68)" d="M 912 1894 C 916 1873 934 1871 938 1893 C 940 1903 935 1910 925 1910 C 915 1910 910 1904 912 1894 z" stroke-linecap="round" /></g></g></g></svg>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:gap-8">
                            <div
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">{{config("app.name")}}</h2>
                                            <p class="mt-4 text-sm/relaxed">{{config("app.tagline")}}</p>
                                            <h3 class="text-xl font-semibold text-black dark:text-white">What is your dream?</h3>
                                        </div>
                                    </div>

                                </div>
                                </div>

                                </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        {{config("app.name")}} v{{ config("app.version") }}
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
