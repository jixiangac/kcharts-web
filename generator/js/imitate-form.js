

(function(S){

    var DOM = S.DOM, Event = S.Event;

    var imitateInit = function(){
        _initInputText();
        _initRadio();
        _initCheckbox();
        _initSelect();
    };

    //模拟input[text]
    function _initInputText(){
        /*var trigger = DOM.query('.K_groupInputTxt');

        if(trigger.length == 0) return;
        _bindOverFocus(trigger);*/
    };

    //模拟radio
    function _initRadio(){
        var radioCls = '.K_groupRadio',
            GroupCls = '.K_commGroup',
            hideLayCls = '.K_hideValue',
            trigger = DOM.query(radioCls);

        if(trigger.length == 0) return;
        S.each(trigger, function(el){
            Event.on(el, 'click', function(ev){
                clearAll();
                DOM.addClass(ev.target, 'checked');
                var dataValue = DOM.attr(ev.target, 'data-value');
                DOM.val(hideLayCls, dataValue);
            });            
        });
        function clearAll(){
            S.each(trigger, function(el){
                DOM.removeClass(el, 'checked');            
            });            
        };
    };

    //模拟checkbox
    function _initCheckbox(){
        
    };

    //模拟select
    function _initSelect(){};

    //
    function _bindOverFocus(elm){
        S.each(elm, function(el){
            Event.on(el, 'mouseenter', function(ev){
                DOM.addClass(ev.target, 'hover');
            });
        });
    };

    S.ready(imitateInit);
})(KISSY);