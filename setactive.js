(function(){
      var url = window.location.pathname;
      url = url.substring(1);

      var lis = document.getElementsByClassName('collapse')[0].getElementsByTagName('a');

      for(var i=0;i<lis.length;i++){
          var href = lis[i].getAttribute("href");
          if (href == url) {
             var li = lis[i].parentElement;
             li.classList.add("active");
             if (li.parentElement.classList.contains("dropdown-menu"))
                li.parentElement.parentElement.classList.add("active");
          }
          else 
            lis[i].parentElement.classList.remove("active");
      }
    })();