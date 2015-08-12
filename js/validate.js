function() {
  return _validate(this);
}
function() {
  var item = $(this);
  var defaultValue = item.attr('jvdefault');
  if (defaultValue && item.val() == '') {
    item.val(defaultValue);
    item.addClass('jv-box-default');
  }
}

function() {
  _needFocus = settings.focusOnBlurError;
  _isFocusOn = false;
  _isCorrect($(this), this.form);
}
function() {
  var item = $(this);
  var defaultValue = item.attr('jvdefault');
  if (defaultValue && defaultValue == item.val()) {
    item.val('');
    item.removeClass('jv-box-default');
  }
}
function() {
  var item = $(this);
  var tipid = item.attr('jvtipid');
  var errorclass = item.attr('jverrorclass');
  if (errorclass) item.removeClass(errorclass);

  if (tipid) {
    var tipobj = $('#' + tipid, this.form);
    if (tipobj && tipobj.attr('jvnormaltip') != undefined) {
      var normalclass = tipobj.attr('jvnormalclass');
      var correctclass = tipobj.attr('jvcorrectclass');
      var errorclass = tipobj.attr('jverrorclass');
      if (normalclass) tipobj.addClass(normalclass);
      if (errorclass) tipobj.removeClass(errorclass);
      if (correctclass) tipobj.removeClass(correctclass);
      tipobj.html(tipobj.attr('jvnormaltip'));
    }
  }
}
function() {
  _needFocus = settings.focusOnBlurError;
  _isFocusOn = false;
  _isCorrect($(this), this.form);
}