<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>用工速递平台</title>
    <link href="/static/tailwind/tailwind.css" rel="stylesheet">
</head>
<body>
<!--header-->
<header class="h-32 lg:h-24 space-y-4 bg-white flex flex-col lg:flex-row justify-between items-center p-5 lg:px-20">
    <a href="#">
        <img src="/static/images/index/logo-ygsd.png" alt="Logo">
    </a>
    <nav>
        <a href="/" class="rounded-none">首页</a>
        <a href="/admin"
           class="ml-24 rounded-full border hover:bg-yellow-500 hover:text-white transition ease-in-out py-1 px-8 border-yellow-500 text-yellow-500">登录</a>
    </nav>
</header>


<!--banner-->
<section class="hidden lg:block">
    <a href="/admin"><img src="/static/images/index/banner.jpg" alt="Banner"></a>
</section>

<h3 class="text-3xl my-5 lg:my-16 text-yellow-500 text-center font-semibold">用工速递平台核心功能</h3>
<!-- section1 -->
<section class="flex flex-col lg:flex-row items-center justify-center space-y-10 lg:space-x-24 py-10">
    <img src="/static/images/index/main-bg01.png" class="p-5"/>
    <div>
        <div class="mb-6 text-2xl text-blue-500 font-bold">
            <span>企业用户端</span>
            <div class="h-2 w-32 -mt-2 bg-blue-300"></div>
        </div>
        <ul class="space-y-2">
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>缺工信息发布，机构接单流程管理</span></li>
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>机构劳动力资源信息浏览、接洽</span></li>
        </ul>
    </div>
</section>
<!-- section2 -->
<section class="bg-blue-50 flex flex-col lg:flex-row items-center justify-center space-y-10 lg:space-x-24 py-10">
    <div>
        <div class="mb-6 text-2xl text-blue-500 font-bold">
            <span>机构管理端</span>
            <div class="h-2 w-32 -mt-2 bg-blue-300"></div>
        </div>
        <ul class="space-y-2">
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>劳动力资源发布</span></li>
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>企业缺工信息浏览、接单</span></li>
        </ul>
    </div>
    <img src="/static/images/index/main-bg02.png" class="p-5"/>
</section>
<!-- section3 -->
<section class="flex flex-col lg:flex-row items-center justify-center space-y-10 lg:space-x-24 py-10">
    <img src="/static/images/index/main-bg03.png" class="p-5"/>
    <div>
        <div class="mb-6 text-2xl text-blue-500 font-bold">
            <span>管理员端</span>
            <div class="h-2 w-28 -mt-2 bg-blue-300"></div>
        </div>
        <ul class="space-y-2">
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>企业、机构管理</span></li>
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>数据汇总、统计</span></li>
        </ul>
    </div>
</section>
<!-- section4 -->
<section class="bg-blue-50 flex flex-col lg:flex-row items-center justify-center space-y-10 lg:space-x-24 py-10">
    <div>
        <div class="mb-6 text-2xl text-blue-500 font-bold">
            <span>区镇端</span>
            <div class="h-2 w-20 -mt-2 bg-blue-300"></div>
        </div>
        <ul class="space-y-2">
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>区镇内企业管理</span></li>
            <li class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span>区镇内企业缺工订单汇总统计</span></li>
        </ul>
    </div>
    <img src="/static/images/index/main-bg04.png" class="p-5"/>
</section>

<!-- section5 -->
<h3 class="text-3xl my-5 lg:my-16 text-yellow-500 text-center font-semibold">用工速递平台适用于哪些场景？</h3>
<section class="bg-white flex justify-center items-center space-x-14 m-10">
    <div class="grid lg:grid-cols-10 gap-x-20">
        <div
            class="h-52 lg:col-start-3 lg:col-span-2 border border-gray-200 shadow-lg rounded-md space-y-2 flex items-center justify-center p-8">
            <span class="text-lg font-semibold text-gray-600 text-center">域内制造业企业多，人员流动性大，企业长期缺工</span>
        </div>
        <div
            class="h-52 lg:col-span-2 border border-gray-200 shadow-lg rounded-md space-y-2 flex items-center justify-center p-8">
            <span class="text-lg font-semibold text-gray-600 text-center">政府牵头接入符合资质人力资源公司，充分调度劳动力资源</span>
        </div>
        <div
            class="h-52 lg:col-span-2 border border-gray-200 shadow-lg rounded-md space-y-2 flex items-center justify-center p-8">
            <span class="text-lg font-semibold text-gray-600 text-center">形成用工缺工大数据，便于政府决策调配劳动力资源</span>
        </div>
    </div>
</section>

<!-- section6 -->
<h3 class="text-3xl my-16 text-yellow-500 text-center font-semibold">为什么要选择用工速递平台？</h3>
<section class="bg-white flex justify-center items-center space-x-14 my-10">
    <div class="grid lg:grid-cols-8 gap-x-20">
        <div
            class="h-72 lg:col-start-2 lg:col-span-2 border border-gray-200 shadow-lg rounded-md space-y-2 flex flex-col items-center justify-center p-8">
            <img src="/static/images/index/ygsd-ico01.png"/>
            <div class="text-md font-semibold text-gray-600 text-center">企业机构双向对接<br>政府监督</div>
        </div>
        <div
            class="h-72 lg:col-span-2 border border-gray-200 shadow-lg rounded-md space-y-2 flex flex-col items-center justify-center p-8">
            <img src="/static/images/index/ygsd-ico02.png"/>
            <div class="text-md font-semibold text-gray-600 text-center">企业缺工及时反馈<br>劳动力资源灵活调配</div>
        </div>
        <div
            class="h-72 lg:col-span-2 border border-gray-200 shadow-lg rounded-md space-y-2 flex flex-col items-center justify-center p-8">
            <img src="/static/images/index/ygsd-ico03.png"/>
            <div class="text-md font-semibold text-gray-600 text-center">多维度数据分析<br>用工缺工情况一目了然</div>
        </div>
    </div>
</section>

<!--contact-->
<section class="bg-local h-64 text-center flex justify-center items-center text-3xl text-blue-600"
         style="background-image: url('/static/images/index/contact-bg.jpg');">
    <a class="lg:pr-40 flex flex-col space-y-6" href="tel:400-6000-600"><div>联系我们，立即体验 >></div><div class="text-yellow-600 text-5xl">400-6000-600</div></a>
</section>


<footer class="bg-gray-700 h-32 flex justify-center items-center">
    <div class="col-span-2 text-center text-white">技术支持&版权所有： <a href="https://www.o-hr.com">圆才信息科技有限公司</a></div>
</footer>
</body>
</html>
