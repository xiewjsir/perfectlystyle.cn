<template>
    <div class="article-detail-box">
        <Sidebar></Sidebar>
        <div class="main mood message  mood-details article1">
            <div class="top_title">博文学好JS,走哪儿都不怕</div>
            <div class="item1">
                <div class="item-content">
                    <h3>学好JS,走哪儿都不怕</h3>
                    <p class="label"><span class="Subtitle">html</span><span class="tb"><i class="layui-icon layui-icon-radio"></i>1000</span><span>2018/02/09</span></p>
                    <p class="txt">对于想学习JavaScript的读者来说,很可能已经掌握了HTML和Web页面设计的基本知识,希望为网页添加一些更好的互动性;或者,目前是在使用其他语言进行编辑,想了解一些JacaScript能够提供哪些更多的功能.JavaScript很适合作为学习编程技术的出发点,在调试过程所掌握的基本概念大多可以用于其他的编程语言,比如C、Java或PHP。 如果对HTML没有任何了解，或是没有任何计算机编程经验。我们建议读者了解一下HTML基本知识。HTML是非常易于理解的。读者不必成为HTML专家就足以了解本书的JavaScript范例了。</p>
                    <div class="img-box">
                        <img src="../assets/img/img6.jpg" alt="">
                    </div>
                    <p class="txt">对于想学习JavaScript的读者来说,很可能已经掌握了HTML和Web页面设计的基本知识,希望为网页添加一些更好的互动性;或者,目前是在使用其他语言进行编辑,想了解一些JacaScript能够提供哪些更多的功能.JavaScript很适合作为学习编程技术的出发点,在调试过程所掌握的基本概念大多可以用于其他的编程语言,比如C、Java或PHP。 如果对HTML没有任何了解，或是没有任何计算机编程经验。我们建议读者了解一下HTML基本知识。HTML是非常易于理解的。读者不必成为HTML专家就足以了解本书的JavaScript范例了。</p>
                    <p class="txt">对于想学习JavaScript的读者来说,很可能已经掌握了HTML和Web页面设计的基本知识,希望为网页添加一些更好的互动性;或者,目前是在使用其他语言进行编辑,想了解一些JacaScript能够提供哪些更多的功能.JavaScript很适合作为学习编程技术的出发点,在调试过程所掌握的基本概念大多可以用于其他的编程语言,比如C、Java或PHP。 如果对HTML没有任何了解，或是没有任何计算机编程经验。我们建议读者了解一下HTML基本知识。HTML是非常易于理解的。读者不必成为HTML专家就足以了解本书的JavaScript范例了。</p>
                    <p class="txt">对于想学习JavaScript的读者来说,很可能已经掌握了HTML和Web页面设计的基本知识,希望为网页添加一些更好的互动性;或者,目前是在使用其他语言进行编辑,想了解一些JacaScript能够提供哪些更多的功能.JavaScript很适合作为学习编程技术的出发点,在调试过程所掌握的基本概念大多可以用于其他的编程语言,比如C、Java或PHP。 如果对HTML没有任何了解，或是没有任何计算机编程经验。我们建议读者了解一下HTML基本知识。HTML是非常易于理解的。读者不必成为HTML专家就足以了解本书的JavaScript范例了。</p>
                    <div class="btn-box">
                        <button type="button" class="layui-btn">上一篇</button>
                        <button type="button" class="layui-btn">下一篇</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="layui-card">
                    <div class="layui-card-header">
                        <form class="layui-form" action="">
                            <div class="layui-form-item layui-form-text">
                                <div class="layui-input-block">
                                    <textarea placeholder="既然来了,就说几句吧" class="layui-textarea" id="LAY-msg-content" style="resize: none;"></textarea>
                                    <div class="btn-box">
                                        <button class="layui-btn" type="button" id="item-btn">确实</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="layui-card-body">
                        <div class="title">
                            <p><span>全部评论</span><em id="count">1</em></p>
                        </div>
                        <ul class="list-item" id="LAY-msg-box">
                            <li>
                                <img src="../assets/img/avatar.jpg" alt="">
                                <div class="list-txt">
                                    <p class="max-title"><span class="name">小汪汪</span><span class="time">2018/06/06</span></p>
                                    <p class="list-content">适合具备一定的Javascript基础知识的读者阅读,也适合从事程序设计工作并想要深入探索Javascript语言的读者阅读。 您不需要具备任何的Javascript基础知识及项目经验，通过学习这本书。 将会在面试有关Javascript程序设计的职位是游刃有余</p>
                                </div>
                            </li>
                        </ul>
                        <div id="demo1"></div>
                    </div>
                </div>
            </div>
        </div>
        <Search></Search>
    </div>
</template>

<script>
    import Sidebar from '@/components/Sidebar.vue'
    import Search from '@/components/Search.vue'
    export default {
        name: "Detail",
        components: {
            Sidebar,
            Search
        }
    }
</script>

<style scoped>

</style>