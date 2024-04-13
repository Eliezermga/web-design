window.addEventListener("DOMContentLoaded", function () {
    var login = new LoginForm("form");
});

var LoginForm = /** @class */ (function () {
    /**
     * @param el Sélecteur CSS de l'élément de formulaire
     */
    function LoginForm(el) {
        var _a, _b;
        this._loginWorking = false;
        this.el = document.querySelector(el);
        (_a = this.el) === null || _a === void 0 ? void 0 : _a.addEventListener("click", this.passwordShowToggle.bind(this));
        (_b = this.el) === null || _b === void 0 ? void 0 : _b.addEventListener("submit", this.login.bind(this));
    }



    Object.defineProperty(LoginForm.prototype, "passwordShow", {
        get: function () {
            return this._passwordShow;
        },
        set: function (value) {
            var _a, _b;
            this._passwordShow = value;
            if ((_b = (_a = this.el) === null || _a === void 0 ? void 0 : _a.password) === null || _b === void 0 ? void 0 : _b.type) {
                this.el.password.type = value ? "text" : "password";
                // masquer l'état précédent
                var stateThen = !value ? PasswordDisplay.On : PasswordDisplay.Off;
                var stateThenIcon = this.el.querySelector("[data-icon=\"eye-".concat(stateThen, "\"]"));
                stateThenIcon === null || stateThenIcon === void 0 ? void 0 : stateThenIcon.setAttribute("display", "none");
                // montrer l'état actuel
                var stateNow = value ? PasswordDisplay.On : PasswordDisplay.Off;
                var stateNowIcon = this.el.querySelector("[data-icon=\"eye-".concat(stateNow, "\"]"));
                stateNowIcon === null || stateNowIcon === void 0 ? void 0 : stateNowIcon.removeAttribute("display");
                // mettre à jour le libellé accessible
                var button = this.el.querySelector("[data-password-show]");
                var buttonTitle = value ? PasswordDisplayLabel.Hide : PasswordDisplayLabel.Show;
                button === null || button === void 0 ? void 0 : button.setAttribute("title", buttonTitle);
            }
        },
        enumerable: false,
        configurable: true
    });




    /**
     * Bascule si le mot de passe doit être affiché
     * @param e Événement de clic
     */
    LoginForm.prototype.passwordShowToggle = function (e) {
        var target = e.target;
        var eye = target;
        if (eye.hasAttribute("data-password-show")) {
            this.passwordShow = !this.passwordShow;
        }
    };

    return LoginForm;
}());

var PasswordDisplay;
(function (PasswordDisplay) {
    PasswordDisplay["Off"] = "off";
    PasswordDisplay["On"] = "on";
})(PasswordDisplay || (PasswordDisplay = {}));

var PasswordDisplayLabel;
(function (PasswordDisplayLabel) {
    PasswordDisplayLabel["Hide"] = "Masquer le mot de passe";
    PasswordDisplayLabel["Show"] = "Afficher le mot de passe";
})(PasswordDisplayLabel || (PasswordDisplayLabel = {}));

var LoginState;
(function (LoginState) {
    LoginState["Default"] = "Connexion";
    LoginState["Working"] = "Connexion en cours...";
})(LoginState || (LoginState = {}));

