var analytcs = {

    endPoint: '/analytics/visit',
    session: null,
    user: null,
    app: null,

    init: function (app) {
        this.session = this.getSessionStorageKey('session');
        this.user = this.getLocalStorageKey('uuid');

        if (!this.user) {
            this.user = this.makeUniqueId();
            this.setLocalStorageKey('uuid', this.user);
        }

        if (!this.session) {
            this.session = this.makeSessionId();
            this.setSessionStorageKey('session', this.session);
        }

        this.app = app;
        this.ping();
    },

    setLocalStorageKey: function (key, value) {
        localStorage.setItem(key, value);
    },

    getLocalStorageKey: function (key) {
        for (var i = 0; i < localStorage.length; i++) {
            if (localStorage.key(i) == key) {
                return localStorage.getItem(localStorage.key(i));
            }
        }

        return false;
    },

    setSessionStorageKey: function (key, value) {
        sessionStorage.setItem(key, value);
    },

    getSessionStorageKey: function (key) {
        for (var i = 0; i < sessionStorage.length; i++) {
            if (sessionStorage.key(i) == key) {
                return sessionStorage.getItem(sessionStorage.key(i));
            }
        }

        return false;
    },

    makeUniqueId: function () {
        var rnd = Math.floor((Math.random() * 100000) + 1);
        var d = new Date();

        return d.getDay() + '_' + d.getMonth() + '_' + d.getYear() + '_' + rnd + '_' + d.getSeconds() + '_' + d.getMilliseconds() + '_' + d.getMinutes() + '_' + d.getHours();
    },

    makeSessionId: function () {
        var d = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            var r = (d + Math.random() * 16) % 16 | 0;
            d = Math.floor(d / 16);

            return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });

        return uuid;
    },

    getParams: function () {
        var output = [];

        if (this.app.length) {
            for (var i = 0; i < this.app.length; i++) {
                output.push(this.app[i][0] + '=' + this.app[i][1]);
            }
        }

        return output.join('&');
    },

    getRequest: function () {
        var xmlhttp;

        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        return xmlhttp;
    },

    ping: function () {
        this.app.push(['location', location.href]);
        this.app.push(['uuid', this.user]);

        var Request = this.getRequest();
        Request.open("GET", this.endPoint + '?q=' + JSON.stringify(this.app), true);
        Request.send();
    }
}

analytcs.init(_bc);
