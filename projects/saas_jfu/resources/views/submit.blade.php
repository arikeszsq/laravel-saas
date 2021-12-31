<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>用工速递平台</title>
    <script src="/static/vue/vue.js"></script>
    <script src="/static/vue/axios/axios.min.js"></script>
    <script src="/static/vue/element-ui/index.js"></script>
    <link href="/static/vue/element-ui/index.css" rel="stylesheet">
</head>
<body>

<div id="vue">
    <el-upload
        action="#"
        list-type="picture-card"
        :auto-upload="false">
        <i slot="default" class="el-icon-plus"></i>
        <div slot="file" slot-scope="{file}">
            <img
                class="el-upload-list__item-thumbnail"
                :src="file.url" alt=""
            >
            <span class="el-upload-list__item-actions">
        <span
            class="el-upload-list__item-preview"
            @click="handlePictureCardPreview(file)"
        >
          <i class="el-icon-zoom-in"></i>
        </span>
        <span
            v-if="!disabled"
            class="el-upload-list__item-delete"
            @click="handleDownload(file)"
        >
          <i class="el-icon-download"></i>
        </span>
        <span
            v-if="!disabled"
            class="el-upload-list__item-delete"
            @click="handleRemove(file)"
        >
          <i class="el-icon-delete"></i>
        </span>
      </span>
        </div>
    </el-upload>
    <el-dialog :visible.sync="dialogVisible">
        <img width="100%" :src="dialogImageUrl" alt="">
    </el-dialog>
</div>


<footer class="bg-gray-700 h-32 flex justify-center items-center">
    <div class="col-span-2 text-center text-white">技术支持&版权所有： <a href="https://www.o-hr.com">圆才信息科技有限公司</a></div>
</footer>
</body>
</html>

<script type="text/javascript">
    var vm = new Vue({
        el: '#vue',
        data() {
            return {
                dialogImageUrl: '',
                dialogVisible: false,
                disabled: false
            };
        },
        methods: {
            handleRemove(file) {
                console.log(file);
            },
            handlePictureCardPreview(file) {
                this.dialogImageUrl = file.url;
                this.dialogVisible = true;
            },
            handleDownload(file) {
                console.log(file);
            }
        }
    })
</script>
