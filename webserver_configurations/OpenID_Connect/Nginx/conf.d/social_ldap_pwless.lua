-- lua-resty-openidc options
opts = {
  redirect_uri_path = "/redirect_uri",
  discovery = "https://auth-dev.mozilla.auth0.com/.well-known/openid-configuration",
  client_id = "YOUR CLIENT ID HERE",
  client_secret = "YOUR CLIENT SECRET HERE",
  scope = "openid email profile",
  iat_slack = 600,
  redirect_uri_scheme = "https",
  logout_path = "/logout",
  redirect_after_logout_uri = "https://testrp.security.allizom.org/?uri=https://social-ldap-pwless.testrp.security.allizom.org/",
  refresh_session_interval = 900
}
