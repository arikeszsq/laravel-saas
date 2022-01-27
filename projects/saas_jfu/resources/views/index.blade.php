<html>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>拓客</title>
    <script src="/static/jQuery/jQuery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css">
    <script src="/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    .input-group {
        margin-top: 20px;
    }

    .banner {
        height: 220px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .banner img {
        width: 100%;
        align-items: center;
    }

    .input-group {
        width: 100%;
    }

    .need::before {
        margin-right: 3px;
        padding-top: 2px;
        color: red;
        content: '*';
    }

    input {
        width: 100%;
        border: 0;
        outline: none;
        background-color: rgba(0, 0, 0, 0);
        font-size: 12px;
        height: 40px;
        border-radius: 4px;
        border-bottom: 1px solid #c8cccf;
        color: #986655;
        outline: 0;
        text-align: left;
        padding-left: 10px;
        display: block;
        cursor: pointer;
        box-shadow: 2px 2px 5px 1px #ccc;
    }

    input::-webkit-input-placeholder {
        color: #986655;
        font-size: 12px;
    }

    .submit-button {
        margin-top: 20px;
        text-align: center;
    }
</style>

<div class="banner">
    <img src="https://img2.baidu.com/it/u=578470490,2014202223&fm=253&fmt=auto&app=138&f=JPEG?w=658&h=260" alt="">
</div>

<div class="form-submit" style="width: 96%;margin-left: 2%;">
    <div class="input-group">
        <label class="need">公司名称</label>
        <input type="text" class="company" placeholder="请输入公司名称" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <label class="need">联系人</label>
        <input type="text" class="username" placeholder="请输入联系人" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <label class="need">联系电话</label>
        <input type="text" class="mobile" placeholder="请输入联系电话" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <label class="need">身份证号码</label>
        <input type="text" class="id_card" placeholder="请输入身份证号码" aria-describedby="basic-addon1">
    </div>
    <div class="submit-button">
        <button class="btn btn-info submit">提交</button>
    </div>
</div>

<script>
    $('.submit').click(function () {
        var company = $('.company').val();
        var user_name = $('.username').val();
        var mobile = $('.mobile').val();
        var id_card = $('.id_card').val();
        alert(company);
    })
</script>
</body>
