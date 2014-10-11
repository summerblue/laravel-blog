
(function($){
    var LBlog = {

        init: function(){
            var self = this;

            self.siteBootUp();
        },

        /*
        * Things to be execute when normal page load
        * and pjax page load.
        */
        siteBootUp: function(){
            var self = this;
            self.initExternalLink();
            self.initTimeAgo();
            self.initDeleteForm();
        },

        /**
         * Open External Links In New Window
         */
        initExternalLink: function(){
            $('a[href^="http://"], a[href^="https://"]').each(function() {
               var a = new RegExp('/' + window.location.host + '/');
               if(!a.test(this.href) ) {
                   $(this).click(function(event) {
                       event.preventDefault();
                       event.stopPropagation();
                       window.open(this.href, '_blank');
                   });
               }
            });
        },

        /**
         * Automatically transform any Date format to human
         * friendly format, all you need to do is add a
         * `.timeago` class.
         */
        initTimeAgo: function(){
            moment.lang('zh-cn');
            $('.timeago').each(function(){
                var time_str = $(this).text();
                if(moment(time_str, "YYYY-MM-DD HH:mm:ss", true).isValid()) {
                    $(this).text(moment(time_str).fromNow());
                }
            });
        },

        /*
         * Construct a form when using the following code, makes more clean code.
         *   {{ link_to_route('tasks.destroy', 'D', $task->id, ['data-method'=>'delete']) }}
         * See this answer: http://stackoverflow.com/a/23082278/689832
         */
        initDeleteForm: function() {
            $('[data-method]').append(function(){
                return "\n"+
                "<form action='"+$(this).attr('href')+"' method='POST' style='display:none'>\n"+
                "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
                "   <input type='hidden' name='_token' value='"+Config.token+"'>\n"+
                "</form>\n"
                })
                .removeAttr('href')
                .attr('style','cursor:pointer;')
                .click(function() {
                    if ($(this).attr('data-method') == 'post') {
                        $(this).find("form").submit();
                    }
                    if ($(this).attr('data-method') == 'delete' && confirm("Are you sure want to proceed?")) {
                        $(this).find("form").submit();
                    }
                });
           // attr('onclick',' if (confirm("Are you sure want to proceed?")) { $(this).find("form").submit(); };');
        },

    }
    window.LBlog = LBlog;
})(jQuery);

$(document).ready(function()
{
    LBlog.init();
});
