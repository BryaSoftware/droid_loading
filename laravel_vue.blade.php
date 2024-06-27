<script type="text/x-template" id="loading">
    <div id="axis" style="text-align: center;height: 350px;">
        <h4 style="color: rgb(152, 30, 50);">
        <slot name="message">
            Loading
            <slot name="message_detail">


            </slot >
           data , please wait...

        </slot>
            <div class="fadeIn">
                <span>*Beep*</span>
                <span>*Boop*</span>

            </div>
        </h4>
        <img src="loading.gif" alt="" style="height: 300px;">
    </div>
</script>

<script>
    Vue.component("loading", {
        template: "#loading"
    });
</script>