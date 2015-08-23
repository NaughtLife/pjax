var browser = navigator.userAgent;
if (!RegExp("(iPad)|(iPhone)").test(browser)) { //仅针对非apple设备
    if (RegExp("(Android)").test(browser)) { //如果是Android设备
        if (!RegExp("(Nexus)").test(browser)) { //仅针对非Nexus设备
            if (!RegExp("(Chrome)").test(browser)) {
                alert("请使用Chrome(版本号40+)浏览本站以获得最佳浏览体验");
            } else if (!RegExp("(Chrome/(45|44|43|42))").test(browser)) {
                alert("你所用Chrome版本太低,请及时升级至 Chrome 42+以获得最佳浏览体验");
            }
        }
    } else //非Android设备(指PC)
    {
        if (!RegExp("(Chrome)").test(browser)) {
            alert("请使用Chrome(版本号40+)浏览本站以获得最佳浏览体验");
            window.location.assign("http://www.google.com/chrome")
        } else if (!RegExp("(Chrome/(45|44|43|42))").test(browser)) {
            alert("你所用Chrome版本太低,请及时升级至 Chrome 42+以获得最佳浏览体验");
        }
    }
}