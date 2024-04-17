window.onload = function () {
  var toc = "";
  var level = 1;

  document.getElementById("entry-content").innerHTML =
    document.getElementById("entry-content").innerHTML.replace(
      /<h([\d])>([^<]+)<\/h([\d])>/gi,
      function (str, openLevel, titleText, closeLevel) {
        if (openLevel != closeLevel) {
          return str;
        }

        if (openLevel > level) {
          toc += (new Array(openLevel - level + 1)).join("<ul class=\"text-main-1 pl-20\">");
        } else if (openLevel < level) {
          toc += (new Array(level - openLevel + 1)).join("</ul>");
        }

        level = parseInt(openLevel);

        var anchor = titleText.replace(/ /g, "-");
        toc += "<li><a href=\"#" + anchor + "\" class=\"text-white text-decoration-none\">" + titleText
          + "</a></li>";

        return "<section id=\"" + anchor + "\"><h" + openLevel + ">"
          + titleText + "</section></h" + closeLevel + ">";
      }
    );

  if (level) {
    toc += (new Array(level + 1)).join("</ul>");
  }

  document.getElementById("toc").innerHTML += "<nav>"+toc+"</nav>";
};