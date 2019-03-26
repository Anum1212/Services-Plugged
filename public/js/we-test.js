/**
* WeTest - Custom AB Testing
*
* Current Version: 1.0.0
* Author: Vishal Chawla
* Date of Creation: 30 Oct 2017
* Last Modified: 30 Nov 2017
* Description: AB testing framework for client side AB testing on UrbanClap Web App.
*
*/

(function(w, d) {
  var uc = (w.urbanclap = w.urbanclap || {});
  var wt = (uc.wetest = uc.wetest || {});
  wt.play = {
    version: '1.0.0',
    config: {
      setExpUrl: "https://www.urbanclap.com/api/v1/webexperiments/create"
    },
    store: {
      actions: []
    },
    uuid: function() {
      var r, d = +new Date, random = Math.floor((Math.random() * 999999) + 9999).toString(16);
      return ("ucucucu".substr(0, 8 - random.length) + random) + "-yxxxxxxxxx-yxxx-yxxx-yxxx-xxxxxxxxxx".replace(/[xy]/g, function (c) {
        r = ((d = Math.floor(d / 16)) + Math.random() * 16) % 16 | 0;
        return (c == "x" ? r : (r & 0x3 | 0x8)).toString(16);
      }) + "-" + +new Date;
    },
    cookie: {
      get: function(cname) {
        var name = cname + "=";
        var ca = d.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0)==' ') c = c.substring(1);
          if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return null;
      },
      set: function(cname, cvalue, exdays) {
        var dt = new Date();
        dt.setTime(dt.getTime() + ((exdays || 36500)*24*60*60*1000));
        d.cookie = cname + "=" + cvalue + "; expires=" + dt.toUTCString() + "; path=/";
        return cvalue;
      },
      del: function(cname) {
        var dt = new Date();
        dt.setTime(dt.getTime() - (24*60*60*1000));
        d.cookie = cname + "=0; expires=" + dt.toUTCString() + "; path=/";
        return true;
      }
    },
    getQueryParam: function(name) {
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(w.location.href);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    },
    browserInfo: {
      name: function() {
        var ua = navigator.userAgent, tem, M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if(/trident/i.test(M[1])){
          tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
          return 'IE '+(tem[1] || '');
        }
        if(M[1]=== 'Chrome'){
          tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
          if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
        }
        M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
        if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
        return M;
      },
      type: function() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? 'mobile-web' : 'desktop-web';
      }
    },
    init: function() {
      var me = this;
      this.injectJquery(function() {
        me.start();
      });
    },
    start: function() {
      this.injectDashboard();
      this.injectCss();
      this.addListeners();
      this.injectMenu();
    },
    addListeners: function() {
      var me = this;
      function mouseMove(e) {
        e.target.classList.toggle("we-test-highlight");
        me.$('.we-test-selector').html(e.target.tagName + ' ' + me.getSelector(e.target));
        e.stopPropagation();
      }
      d.body.addEventListener("mouseover", mouseMove);
      d.body.addEventListener("mouseout", mouseMove);
      d.body.addEventListener("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        me.showMenu(e);
        return false;
      });
    },
    injectCss: function() {
      var css = '.we-test-highlight{border:2px dashed red !important;}'+
      '.we-test-dashboard-container{width:100%;height:40px;position:fixed;bottom:0;left:0;background:rgba(236,236,236,0.95);border-top:2px solid #000;z-index:10000000;}'+
      '.we-test-selector{float:right;margin:10px;color:#000;font-size:10px;color:blue;}'+
      '.we-test-menu{width:180px;position:fixed;top:-500px;left:-500px;transition:all 0.2s ease-out;background:rgba(255,255,255,0.95);border-left:4px solid #000;box-shadow:1px 10px 10px rgba(0,0,0,0.3);z-index:10000000;}'+
      '.we-test-save{margin:6px 0 0 30px;background:#000;color:#fff;}'+
      '.we-test-menuItems{padding:0;margin:0;}'+
      '.we-test-menuItem:first-child{cursor:default;background-color:#000;color:#fff;}'+
      '.we-test-menuItem{cursor:pointer;background:#f0f0f0;padding:10px;border-bottom:1px solid #000;}',

      head = d.head || d.getElementsByTagName('head')[0],
      style = d.createElement('style');
      style.type = 'text/css';
      if (style.styleSheet){
        style.styleSheet.cssText = css;
      } else {
        style.appendChild(d.createTextNode(css));
      }
      head.appendChild(style);
    },
    injectJquery: function(cb) {
      var me = this;
      var jq = d.createElement('script');
      d.getElementsByTagName('head')[0].appendChild(jq);
      jq.onload = function() {
        me.$ = jQuery.noConflict();
        typeof cb === 'function' && cb();
      };
      jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js";

      var sort = d.createElement('script');
      sort.src = "https://rubaxa.github.io/Sortable/Sortable.js";
      d.getElementsByTagName('head')[0].appendChild(sort);
    },
    injectDashboard: function() {
      var $ = this.$;
      var abdc = $('<div/>').attr({
        "class": "we-test-dashboard-container"
      });

      var abdh = $('<div/>').attr({
        "class": "we-test-dashboard-header"
      }).html(
        '<a href="javascript:void(0)"><img src="//res.cloudinary.com/urbanclap/image/upload/v1490682269/web-assets/Logo-new.png" width="105px" height="25px" style="margin-left:5px;margin-top:6px;" /></a> '+
        '<span style="color:#ADA9A9;font-weight:bold;font-size:12px;">WeTest</span>'+
        '<button class="we-test-save" onclick="urbanclap.wetest.play.saveExperiment()">Save Experiment</button>'+
        '<p class="we-test-selector"></p>'
      );
      $('html').append(abdc.append([abdh]));
    },
    injectMenu: function() {
      var me = this;
      var $ = this.$;
      var menu = $('<div/>').attr({
        "id": "we-test-menu",
        "class": "we-test-menu"
      }).click(function(e) {
        me.hideMenu();
      });
      $('html').append(menu);
    },
    getMenuItems: function(e) {
      var me = this;
      var $ = this.$;
      var listItems = [
        {
          tagName: "H1",
          title: "Change Heading",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newHeading = prompt("Please enter new H1", e.target.innerHTML);

            if (newHeading) {
              d.querySelector(selector).innerHTML = newHeading;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: newHeading
            });
          }
        },
        {
          tagName: "H2",
          title: "Change Heading",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newHeading = prompt("Please enter new H2", e.target.innerHTML);

            if (newHeading) {
              d.querySelector(selector).innerHTML = newHeading;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: newHeading
            });
          }
        },
        {
          tagName: "H3",
          title: "Change Heading",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newHeading = prompt("Please enter new H3", e.target.innerHTML);

            if (newHeading) {
              d.querySelector(selector).innerHTML = newHeading;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: newHeading
            });
          }
        },
        {
          tagName: "H4",
          title: "Change Heading",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newHeading = prompt("Please enter new H4", e.target.innerHTML);

            if (newHeading) {
              d.querySelector(selector).innerHTML = newHeading;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: newHeading
            });
          }
        },
        {
          tagName: "H5",
          title: "Change Heading",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newHeading = prompt("Please enter new H5", e.target.innerHTML);

            if (newHeading) {
              d.querySelector(selector).innerHTML = newHeading;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: newHeading
            });
          }
        },
        {
          tagName: "H6",
          title: "Change Heading",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newHeading = prompt("Please enter new H6", e.target.innerHTML);

            if (newHeading) {
              d.querySelector(selector).innerHTML = newHeading;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: newHeading
            });
          }
        },
        {
          tagName: "IMG",
          title: "Change Image",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var newImg = prompt("Please enter new image url", e.target.src);

            if (newImg) {
              d.querySelector(selector).src = newImg;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'imgsrc',
              val: newImg
            });
          }
        },
        {
          tagName: "P",
          title: "Update Paragraph",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var content = prompt("Please enter new content", e.target.innerHTML);

            if (content) {
              d.querySelector(selector).innerHTML = content;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: content
            });
          }
        },
        {
          tagName: "A",
          title: "Change Anchor Text",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var atext = prompt("Please enter new Anchor Text", e.target.innerHTML);

            if (atext) {
              d.querySelector(selector).innerHTML = atext;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: atext
            });
          }
        },
        {
          tagName: "A",
          title: "Change Anchor Href",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var ahref = prompt("Please enter new Anchor Href", e.target.href);

            if (ahref) {
              d.querySelector(selector).href = ahref;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'ahref',
              val: ahref
            });
          }
        },
        {
          tagName: "SPAN",
          title: "Update Content",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var content = prompt("Please enter new content", e.target.innerHTML);

            if (content) {
              d.querySelector(selector).innerHTML = content;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: content
            });
          }
        },
        {
          tagName: "DIV",
          title: "Update Content",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var content = prompt("Please enter new content", e.target.innerHTML);

            if (content) {
              d.querySelector(selector).innerHTML = content;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: content
            });
          }
        },
        {
          tagName: "BUTTON",
          title: "Change Text",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var text = prompt("Please enter new text", e.target.innerHTML);

            if (text) {
              d.querySelector(selector).innerHTML = text;
            }

            this.store.actions.push({
              el: selector,
              cmd: 'innerhtml',
              val: text
            });
          }
        },
        {
          tagName: "*",
          title: "Hide",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            if (selector) {
              d.querySelector(selector).style.display = 'none';
            }

            this.store.actions.push({
              el: selector,
              cmd: 'hide'
            });
          }
        },
        {
          tagName: "*",
          title: "Update CSS",
          onClick: function (e) {
            var selector =  this.getSelector(e.target);
            var property = prompt("Please enter css property to update");

            if (property) {
              var value = prompt("Please enter " + property + " value");
              if (value) {
                d.querySelector(selector).style[property] = value;
              }
            }

            this.store.actions.push({
              el: selector,
              cmd: 'style',
              val: {
                property: property,
                value: value
              }
            });
          }
        }
      ];

      var menuItems = $('<ul/>').attr({
        "class": "we-test-menuItems"
      });

      menuItems.append($('<li/>').attr({
        "class": "we-test-menuItem"
      }).html(e.target.tagName));

      listItems.map(function(list) {
        if(list.tagName === e.target.tagName || list.tagName === "*") {
          menuItems.append($('<li/>').attr({
            "class": "we-test-menuItem"
          }).click(list.onClick.bind(me, e)).html(list.title));
        }
      });

      return menuItems;
    },
    showMenu: function(e) {
      if(!e.clientY && !e.clientX) {
        return false;
      }

      this.$('#we-test-menu').html(this.getMenuItems(e));

      this.$("#we-test-menu").css({
        top: e.clientY + 'px',
        left: e.clientX + 'px'
      });
      d.body.style.overflow = "hidden";
    },
    hideMenu: function() {
      this.$("#we-test-menu").css({
        top: '-500px',
        left: '-500px'
      });
      d.body.style.overflow = "visible";
    },
    getSelector: function(node) {
      function uniqueElementExists(selector) {
        try {
          return document.querySelectorAll(selector).length === 1
        } catch (e) {}
      }
      var nodeName = node.nodeName.toLowerCase();
      if (nodeName === 'body' || nodeName === 'head') {
        return nodeName;
      }
      var id = node.getAttribute('id');
      if (id && uniqueElementExists('#' + id)) {
        return '#' + id;
      }
      var classList = node.classList;
      classList = Array.prototype.filter.call(classList, function(i) {
        return i.indexOf('we-test') === -1;
      });
      for (var i=0; i < classList.length; i++) {
        if (uniqueElementExists('.' + classList[i])) {
          return '.' + classList[i];
        }
      }
      var index = Array.prototype.indexOf.call(node.parentNode.children, node);
      var path = this.getSelector(node.parentNode) + ' > ' + nodeName;
      var newPath = path + ':nth-child(' + (index + 1) +  ')';
      if (uniqueElementExists(path)) {
        return path
      }
      return newPath;
    },
    getExperiment: function () {
      return {
        url: w.location.href,
        path: w.location.pathname,
        exp_key: w.location.pathname,
        device: this.browserInfo.type(),
        actions: this.store.actions
      }
    },
    saveExperiment: function () {
      var data = this.getExperiment();
      if (!data.actions.length) {
        alert("You have nothing to save for this experiment. Please create version B of this page by clicking on the element you want to test!");
        return false;
      }

      if (data.url && data.path && data.exp_key && data.device) {
        data.expiry = parseInt(prompt("Enter the number of days for which you want to run this experiment!", 7), 10);

        if (isNaN(data.expiry) || typeof data.expiry !== "number" || data.expiry < 1) {
          alert("Number of days for experiment should be more than or equal to 1");
          return false;
        }

        data.pattern = prompt("Do you want to run this experiment for all pages matching the following pattern?", w.location.pathname);

        if (data.pattern) {
          if (confirm("This might affect lot of pages!!! Do you really want to run this experiment for any page containing '" + data.pattern + "' in url?")) {
            data.exp_key = data.pattern;
            data.pattern = true;
          } else {
            return false;
          }
        } else {
          data.pattern = false;
        }

        data.tester_key = prompt("Enter your secret We-Test key!!!");

        if (!data.tester_key) {
          alert("You should have a valid We-Test key to run AB Test experiments. Please email Mayank (mayankkumar@urbanclap.com) from web team to request your secret key.");
          return false;
        }

        if (confirm("Are you sure you want to save this experiment")) {
          this.fireXhr(this.config.setExpUrl, data, 'POST', {
            'Content-Type': 'application/json'
          }, function(req) {
            if(req.status === 200) {
  	          alert("Experiment saved successfully... Cheers!! 🍻");
  					} else {
              alert("Something went seriously wrong... Unable to save this experiment, Please contact web team!");
            }
          });
        }
      } else {
        alert("Something is wrong, Unable to save this experiment!");
      }
    },
    fireXhr: function (url, data, method, headers, callback) {
      try {
        var request = w.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        callback && (request.onreadystatechange = function() {
          if(request.readyState === 4) {
            callback(request);
          }
        });
        request.open(method, url, true);
        for(var header in headers) {
          request.setRequestHeader(header, headers[header]);
        }
        request.send(JSON.stringify(data));
      }
      catch(e) {
        this.log(e);
      }
    },
    extend: function() {
      for(var i = 1; i < arguments.length; i++) {
        for(var key in arguments[i]) {
          if(arguments[i].hasOwnProperty(key)) {
            arguments[0][key] = arguments[i][key];
          }
        }
      }
      return arguments[0];
    },
    log: function() {
      w.console && w.console.log.apply(w.console, [].slice.call(arguments));
    }
  };
  urbanclap.wetest.play.init();
})(window, document);
