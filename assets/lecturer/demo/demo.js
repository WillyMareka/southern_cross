
// Polyfills
//
(function() {
  // Array indexOf
  if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function (searchElement, fromIndex) {
      if ( this === undefined || this === null ) {
        throw new TypeError( '"this" is null or not defined' );
      }
      var length = this.length >>> 0; // Hack to convert object.length to a UInt32
      fromIndex = +fromIndex || 0;
      if (Math.abs(fromIndex) === Infinity) {
        fromIndex = 0;
      }
      if (fromIndex < 0) {
        fromIndex += length;
        if (fromIndex < 0) {
          fromIndex = 0;
        }
      }
      for (;fromIndex < length; fromIndex++) {
        if (this[fromIndex] === searchElement) {
          return fromIndex;
        }
      }
      return -1;
    };
  }

  // Event listener
  if (!Event.prototype.preventDefault) {
    Event.prototype.preventDefault=function() {
      this.returnValue=false;
    };
  }
  if (!Event.prototype.stopPropagation) {
    Event.prototype.stopPropagation=function() {
      this.cancelBubble=true;
    };
  }
  if (!Element.prototype.addEventListener) {
    var eventListeners=[];
    
    var addEventListener=function(type,listener /*, useCapture (will be ignored) */) {
      var self=this;
      var wrapper=function(e) {
        e.target=e.srcElement;
        e.currentTarget=self;
        if (listener.handleEvent) {
          listener.handleEvent(e);
        } else {
          listener.call(self,e);
        }
      };
      if (type=="DOMContentLoaded") {
        var wrapper2=function(e) {
          if (document.readyState=="complete") {
            wrapper(e);
          }
        };
        document.attachEvent("onreadystatechange",wrapper2);
        eventListeners.push({object:this,type:type,listener:listener,wrapper:wrapper2});
        
        if (document.readyState=="complete") {
          var e=new Event();
          e.srcElement=window;
          wrapper2(e);
        }
      } else {
        this.attachEvent("on"+type,wrapper);
        eventListeners.push({object:this,type:type,listener:listener,wrapper:wrapper});
      }
    };
    var removeEventListener=function(type,listener /*, useCapture (will be ignored) */) {
      var counter=0;
      while (counter<eventListeners.length) {
        var eventListener=eventListeners[counter];
        if (eventListener.object==this && eventListener.type==type && eventListener.listener==listener) {
          if (type=="DOMContentLoaded") {
            this.detachEvent("onreadystatechange",eventListener.wrapper);
          } else {
            this.detachEvent("on"+type,eventListener.wrapper);
          }
          break;
        }
        ++counter;
      }
    };
    Element.prototype.addEventListener=addEventListener;
    Element.prototype.removeEventListener=removeEventListener;
    if (HTMLDocument) {
      HTMLDocument.prototype.addEventListener=addEventListener;
      HTMLDocument.prototype.removeEventListener=removeEventListener;
    }
    if (Window) {
      Window.prototype.addEventListener=addEventListener;
      Window.prototype.removeEventListener=removeEventListener;
    }
  }
})();


// Demo
//

(function() {

var storageSupported = (typeof(window.Storage)!=="undefined");

// Functions
//

var reloadPage = function () {
  location.reload();
}

var testTheme = function (name) {
  for (var j=0; j<demo_themes.length; j++) {
    if (demo_themes[j].name === name) {
      return demo_themes[j].name;
    }
  }
  return 'default';
}

var loadDemoSettings = function () {
  var result = {
    fixed_navbar: false,
    fixed_menu:   false,
    rtl:          false,
    menu_right:   false,
    theme:        'default'
  };

  if (storageSupported) {
    try {
      result.fixed_navbar = (window.localStorage.demo_fixed_navbar && window.localStorage.demo_fixed_navbar === '1');
      result.fixed_menu   = (window.localStorage.demo_fixed_menu && window.localStorage.demo_fixed_menu === '1');
      result.rtl          = (window.localStorage.demo_rtl && window.localStorage.demo_rtl === '1');
      result.menu_right   = (window.localStorage.demo_menu_right && window.localStorage.demo_menu_right === '1');
      result.theme        = testTheme((window.localStorage.demo_theme) ? window.localStorage.demo_theme : '');
      return result;
    } catch (e) {}
  } 

  var key, val, pos, demo_cookies = document.cookie.split(';');
  for (var i=0, l=demo_cookies.length; i < l; i++) {

    pos = demo_cookies[i].indexOf('=');
    key = demo_cookies[i].substr(0,  pos).replace(/^\s+|\s+$/g, '');
    val = demo_cookies[i].substr(pos + 1).replace(/^\s+|\s+$/g, '');

    if (key === 'demo_fixed_navbar') {
      result.fixed_navbar = (val === '1') ? true : false;
    
    } else if (key === 'demo_fixed_menu') {
      result.fixed_menu = (val === '1') ? true : false;
    
    } else if (key === 'demo_rtl') {
      result.rtl = (val === '1') ? true : false;
    
    } else if (key === 'demo_menu_right') {
      result.menu_right = (val === '1') ? true : false;
    
    } else if (key === 'demo_theme') {
      result.theme = testTheme(val);
    }
  }

  return result;
}





})();
