$(function () {

    $("#form-test").bootstrapValidator({
        // live: 'disabled',//验证时机，enabled是内容有变化就验证（默认），disabled和submitted是提交再验证
        feedbackIcons: {//根据验证结果显示的各种图标
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写用户名'
                    },
                    stringLength: {//检测长度
                        min: 5,
                        max: 20,
                        message: '长度只能在5-20之间'
                    }

                }
            },
            password: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写密码'
                    },
                    stringLength: {//检测长度
                        min: 6,
                        max: 15,
                        message: '长度只能在6-15之间'
                    }
                }
            },
            checkPassword: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写密码'
                    },
                    identical: {
                        field: 'password',//指定控件name
                        message: '两次密码输入不一致'
                    }

                }
            },
            mobilePhone: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写手机号'
                    },
                    regexp: {
                        regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                        message: '手机号码格式不正确'
                    }

                }
            },
            email: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写密码'
                    },
                    emailAddress: {
                        message: '电子邮件格式不正确'
                    }
                }
            }

        }
    })
    .on('success.form.bv', function (e) {
        //验证成功后的处理，比如：发起AJAX  
        e.preventDefault();
        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');
        const reqUrl = './api/userAdd.php';
        const data = $form.serialize();
        // Use Ajax to submit form data
        $.post(reqUrl, data, function (result) {
            if (result.issuccess) {
                alert(result.msg);
                location.href = './login.php';
            } else {
                alert(result.msg);
            }
        }, 'json');
    });

    // 用户登录页面验证及数据请求
    $("#userlogin").bootstrapValidator({
        // live: 'disabled',//验证时机，enabled是内容有变化就验证（默认），disabled和submitted是提交再验证
        feedbackIcons: {//根据验证结果显示的各种图标
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写用户名'
                    },
                    stringLength: {//检测长度
                        min: 5,
                        max: 20,
                        message: '长度只能在5-20之间'
                    }

                }
            },
            password: {
                validators: {
                    notEmpty: {//检测非空,radio也可用
                        message: '请填写密码'
                    },
                    stringLength: {//检测长度
                        min: 6,
                        max: 15,
                        message: '长度只能在6-15之间'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function (e) {
        //验证成功后的处理，比如：发起AJAX  
        e.preventDefault();
        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');
        const reqUrl = './api/userCheck.php';
        const data = $form.serialize();
        // Use Ajax to submit form data
        $.post(reqUrl, data, function (result) {

            if (result.issuccess) {
                $("#myModalLabel").text("登录成功");
                $(".modal-body").html(`<span class='glyphicon glyphicon-ok'></span>${result.msg},等候<span id='num'>6</span>`);
                var num = 6;
                var timeId = setInterval(() => {
                    num--;
                    $("#num").text(num);
                    if (num == 0) {
                        clearInterval(timeId);
                        location.href = './personal.php';
                    }
                }, 1000);
            } else {
                $("#myModalLabel").text("登录失败");
                $(".modal-body").html(`<span class='glyphicon glyphicon-remove'></span>${result.msg}`);

            }
            $('#myModal').modal('show');
        }, 'json');
    });
});