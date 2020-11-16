var HomeView = function(page) {
    this.initialize = function() {
        this.$el = $("<div/>");
    };
    this.render = function() {
        var content = this.template(page);
         if (isIOS()) {
             if (needsToSeeIOSPrompt()) {
                var content2 = content.replace("ios-hidden", "ios-visible");
                content = content2;
            }
        }
        this.$el.html(content);
        return this;
    };
    this.initialize();
};

function isIOS() {
    let iOS = [
        "iPhone",
        "iPad",
        "iPod",
        "iPhone Simulator",
        "MacIntel",
        "Macintosh"
    ].includes(navigator.platform);
    return iOS;
}

function needsToSeeIOSPrompt() {
    if (!window.localStorage.getItem("lastSeenPrompt")) {
        window.localStorage.setItem("lastSeenPrompt", today);
        return true;
    }
    return false;
}
