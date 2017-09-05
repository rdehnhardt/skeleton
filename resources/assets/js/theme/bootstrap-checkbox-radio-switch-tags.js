!function ($) {

 /* CHECKBOX PUBLIC CLASS DEFINITION
  * ============================== */

  var Checkbox = function (element, options) {
    this.init(element, options);
  }

  Checkbox.prototype = {

    constructor: Checkbox

  , init: function (element, options) {
    var $el = this.$element = $(element)

    this.options = $.extend({}, $.fn.checkbox.defaults, options);
    $el.before(this.options.template);
    this.setState();
  }

  , setState: function () {
      var $el = this.$element
        , $parent = $el.closest('.checkbox');

        $el.prop('disabled') && $parent.addClass('disabled');
        $el.prop('checked') && $parent.addClass('checked');
    }

  , toggle: function () {
      var ch = 'checked'
        , $el = this.$element
        , $parent = $el.closest('.checkbox')
        , checked = $el.prop(ch)
        , e = $.Event('toggle')

      if ($el.prop('disabled') == false) {
        $parent.toggleClass(ch) && checked ? $el.removeAttr(ch) : $el.prop(ch, ch);
        $el.trigger(e).trigger('change');
      }
    }

  , setCheck: function (option) {
      var d = 'disabled'
        , ch = 'checked'
        , $el = this.$element
        , $parent = $el.closest('.checkbox')
        , checkAction = option == 'check' ? true : false
        , e = $.Event(option)

      $parent[checkAction ? 'addClass' : 'removeClass' ](ch) && checkAction ? $el.prop(ch, ch) : $el.removeAttr(ch);
      $el.trigger(e).trigger('change');
    }

  }


 /* CHECKBOX PLUGIN DEFINITION
  * ======================== */

  var old = $.fn.checkbox

  $.fn.checkbox = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('checkbox')
        , options = $.extend({}, $.fn.checkbox.defaults, $this.data(), typeof option == 'object' && option);
      if (!data) $this.data('checkbox', (data = new Checkbox(this, options)));
      if (option == 'toggle') data.toggle()
      if (option == 'check' || option == 'uncheck') data.setCheck(option)
      else if (option) data.setState();
    });
  }

  $.fn.checkbox.defaults = {
    template: '<span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>'
  }


 /* CHECKBOX NO CONFLICT
  * ================== */

  $.fn.checkbox.noConflict = function () {
    $.fn.checkbox = old;
    return this;
  }


 /* CHECKBOX DATA-API
  * =============== */

  $(document).on('click.checkbox.data-api', '.checkbox', function (e) {
    var $checkbox = $(e.target);
    if (e.target.tagName != "A") {
      e && e.preventDefault() && e.stopPropagation();
      if (!$checkbox.hasClass('checkbox')) $checkbox = $checkbox.closest('.checkbox');
      $checkbox.find(':checkbox').checkbox('toggle');
    }
  });

  $(function () {
    $('[data-toggle="checkbox"]').each(function () {
      if($(this).data('toggle') == 'switch') return;

      var $checkbox = $(this);
      $checkbox.checkbox();
    });
  });

}(window.jQuery);




!function ($) {

 /* RADIO PUBLIC CLASS DEFINITION
  * ============================== */

  var Radio = function (element, options) {
    this.init(element, options);
  }

  Radio.prototype = {

    constructor: Radio

  , init: function (element, options) {
      var $el = this.$element = $(element)

      this.options = $.extend({}, $.fn.radio.defaults, options);
      $el.before(this.options.template);
      this.setState();
    }

  , setState: function () {
      var $el = this.$element
        , $parent = $el.closest('.radio');

        $el.prop('disabled') && $parent.addClass('disabled');
        $el.prop('checked') && $parent.addClass('checked');
    }

  , toggle: function () {
      var d = 'disabled'
        , ch = 'checked'
        , $el = this.$element
        , checked = $el.prop(ch)
        , $parent = $el.closest('.radio')
        , $parentWrap = $el.closest('form').length ? $el.closest('form') : $el.closest('body')
        , $elemGroup = $parentWrap.find(':radio[name="' + $el.attr('name') + '"]')
        , e = $.Event('toggle')

        if ($el.prop(d) == false) {
            $elemGroup.not($el).each(function () {
              var $el = $(this)
                , $parent = $(this).closest('.radio');

                if ($el.prop(d) == false) {
                  $parent.removeClass(ch) && $el.removeAttr(ch).trigger('change');
                }
            });

            if (checked == false) $parent.addClass(ch) && $el.prop(ch, true);
            $el.trigger(e);

            if (checked !== $el.prop(ch)) {
                $el.trigger('change');
            }
        }
    }

  , setCheck: function (option) {
      var ch = 'checked'
        , $el = this.$element
        , $parent = $el.closest('.radio')
        , checkAction = option == 'check' ? true : false
        , checked = $el.prop(ch)
        , $parentWrap = $el.closest('form').length ? $el.closest('form') : $el.closest('body')
        , $elemGroup = $parentWrap.find(':radio[name="' + $el['attr']('name') + '"]')
        , e = $.Event(option)

      $elemGroup.not($el).each(function () {
        var $el = $(this)
          , $parent = $(this).closest('.radio');

          $parent.removeClass(ch) && $el.removeAttr(ch);
      });

      $parent[checkAction ? 'addClass' : 'removeClass'](ch) && checkAction ? $el.prop(ch, ch) : $el.removeAttr(ch);
      $el.trigger(e);

      if (checked !== $el.prop(ch)) {
        $el.trigger('change');
      }
    }

  }


 /* RADIO PLUGIN DEFINITION
  * ======================== */

  var old = $.fn.radio

  $.fn.radio = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('radio')
        , options = $.extend({}, $.fn.radio.defaults, $this.data(), typeof option == 'object' && option);
      if (!data) $this.data('radio', (data = new Radio(this, options)));
      if (option == 'toggle') data.toggle()
      if (option == 'check' || option == 'uncheck') data.setCheck(option)
      else if (option) data.setState();
    });
  }

  $.fn.radio.defaults = {
    template: '<span class="icons"><span class="first-icon fa fa-circle-o"></span><span class="second-icon fa fa-dot-circle-o"></span></span>'
  }


 /* RADIO NO CONFLICT
  * ================== */

  $.fn.radio.noConflict = function () {
    $.fn.radio = old;
    return this;
  }


 /* RADIO DATA-API
  * =============== */

  $(document).on('click.radio.data-api', '.radio', function (e) {
    var $radio = $(e.target);
    e && e.preventDefault() && e.stopPropagation();
    if (!$radio.hasClass('radio')) $radio = $radio.closest('.radio');
    $radio.find(':radio').radio('toggle');
  });

  $(function () {
    $('[data-toggle="radio"]').each(function () {
      var $radio = $(this);
      $radio.radio();
    });
  });

}(window.jQuery);



/* ============================================================
 * bootstrapSwitch v1.3 by Larentis Mattia @spiritualGuru
 * http://www.larentis.eu/switch/
 * ============================================================
 * Licensed under the Apache License, Version 2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 * ============================================================ */

!function ($) {
  "use strict";

  $.fn['bootstrapSwitch'] = function (method) {
    var methods = {
      init: function () {
        return this.each(function () {
            var $element = $(this)
              , $div
              , $switchLeft
              , $switchRight
              , $label
              , myClasses = ""
              , classes = $element.attr('class')
              , color
              , moving
              , onLabel = "ON"
              , offLabel = "OFF"
              , icon = false;

            $.each(['switch-mini', 'switch-small', 'switch-large'], function (i, el) {
              if (classes.indexOf(el) >= 0)
                myClasses = el;
            });

            $element.addClass('has-switch');

            if ($element.data('on') !== undefined)
              color = "switch-" + $element.data('on');

            if ($element.data('on-label') !== undefined)
              onLabel = $element.data('on-label');

            if ($element.data('off-label') !== undefined)
              offLabel = $element.data('off-label');

            if ($element.data('icon') !== undefined)
              icon = $element.data('icon');

            $switchLeft = $('<span>')
              .addClass("switch-left")
              .addClass(myClasses)
              .addClass(color)
              .html(onLabel);

            color = '';
            if ($element.data('off') !== undefined)
              color = "switch-" + $element.data('off');

            $switchRight = $('<span>')
              .addClass("switch-right")
              .addClass(myClasses)
              .addClass(color)
              .html(offLabel);

            $label = $('<label>')
              .html("&nbsp;")
              .addClass(myClasses)
              .attr('for', $element.find('input').attr('id'));

            if (icon) {
              $label.html('<i class="' + icon + '"></i>');
            }

            $div = $element.find(':checkbox').wrap($('<div>')).parent().data('animated', false);

            if ($element.data('animated') !== false)
              $div.addClass('switch-animate').data('animated', true);

            $div
              .append($switchLeft)
              .append($label)
              .append($switchRight);

            $element.find('>div').addClass(
              $element.find('input').is(':checked') ? 'switch-on' : 'switch-off'
            );

            if ($element.find('input').is(':disabled'))
              $(this).addClass('deactivate');

            var changeStatus = function ($this) {
              $this.siblings('label').trigger('mousedown').trigger('mouseup').trigger('click');
            };

            $element.on('keydown', function (e) {
              if (e.keyCode === 32) {
                e.stopImmediatePropagation();
                e.preventDefault();
                changeStatus($(e.target).find('span:first'));
              }
            });

            $switchLeft.on('click', function (e) {
              changeStatus($(this));
            });

            $switchRight.on('click', function (e) {
              changeStatus($(this));
            });

            $element.find('input').on('change', function (e) {
              var $this = $(this)
                , $element = $this.parent()
                , thisState = $this.is(':checked')
                , state = $element.is('.switch-off');

              e.preventDefault();

              $element.css('left', '');

              if (state === thisState) {

                if (thisState)
                  $element.removeClass('switch-off').addClass('switch-on');
                else $element.removeClass('switch-on').addClass('switch-off');

                if ($element.data('animated') !== false)
                  $element.addClass("switch-animate");

                $element.parent().trigger('switch-change', {'el': $this, 'value': thisState})
              }
            });

            $element.find('label').on('mousedown touchstart', function (e) {
              var $this = $(this);
              moving = false;

              e.preventDefault();
              e.stopImmediatePropagation();

              $this.closest('div').removeClass('switch-animate');

              if ($this.closest('.has-switch').is('.deactivate'))
                $this.unbind('click');
              else {
                $this.on('mousemove touchmove', function (e) {
                  var $element = $(this).closest('.switch')
                    , relativeX = (e.pageX || e.originalEvent.targetTouches[0].pageX) - $element.offset().left
                    , percent = (relativeX / $element.width()) * 100
                    , left = 25
                    , right = 75;

                  moving = true;

                  if (percent < left)
                    percent = left;
                  else if (percent > right)
                    percent = right;

                  $element.find('>div').css('left', (percent - right) + "%")
                });

                $this.on('click touchend', function (e) {
                  var $this = $(this)
                    , $target = $(e.target)
                    , $myCheckBox = $target.siblings('input');

                  e.stopImmediatePropagation();
                  e.preventDefault();

                  $this.unbind('mouseleave');

                  if (moving)
                    $myCheckBox.prop('checked', !(parseInt($this.parent().css('left')) < -25));
                  else $myCheckBox.prop("checked", !$myCheckBox.is(":checked"));

                  moving = false;
                  $myCheckBox.trigger('change');
                });

                $this.on('mouseleave', function (e) {
                  var $this = $(this)
                    , $myCheckBox = $this.siblings('input');

                  e.preventDefault();
                  e.stopImmediatePropagation();

                  $this.unbind('mouseleave');
                  $this.trigger('mouseup');

                  $myCheckBox.prop('checked', !(parseInt($this.parent().css('left')) < -25)).trigger('change');
                });

                $this.on('mouseup', function (e) {
                  e.stopImmediatePropagation();
                  e.preventDefault();

                  $(this).unbind('mousemove');
                });
              }
            });
          }
        );
      },
      toggleActivation: function () {
        $(this).toggleClass('deactivate');
      },
      isActive: function () {
        return !$(this).hasClass('deactivate');
      },
      setActive: function (active) {
        if (active)
          $(this).removeClass('deactivate');
        else $(this).addClass('deactivate');
      },
      toggleState: function (skipOnChange) {
        var $input = $(this).find('input:checkbox');
        $input.prop('checked', !$input.is(':checked')).trigger('change', skipOnChange);
      },
      setState: function (value, skipOnChange) {
        $(this).find('input:checkbox').prop('checked', value).trigger('change', skipOnChange);
      },
      status: function () {
        return $(this).find('input:checkbox').is(':checked');
      },
      destroy: function () {
        var $div = $(this).find('div')
          , $checkbox;

        $div.find(':not(input:checkbox)').remove();

        $checkbox = $div.children();
        $checkbox.unwrap().unwrap();

        $checkbox.unbind('change');

        return $checkbox;
      }
    };

    if (methods[method])
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    else if (typeof method === 'object' || !method)
      return methods.init.apply(this, arguments);
    else
      $.error('Method ' + method + ' does not exist!');
  };

    $(function () {
        $('.switch').each(function () {
            $(this).bootstrapSwitch();
        });

        $('[data-toggle="switch"]').each(function (){
            $(this).wrap('<div class="switch" />').parent().bootstrapSwitch();
        });
    });


}(jQuery);



/*

	jQuery Tags Input Plugin 1.3.3

	Copyright (c) 2011 XOXCO, Inc

	Documentation for this plugin lives here:
	http://xoxco.com/clickable/jquery-tags-input

	Licensed under the MIT license:
	http://www.opensource.org/licenses/mit-license.php

	ben@xoxco.com

*/

(function($) {

	var delimiter = new Array();
	var tags_callbacks = new Array();
	$.fn.doAutosize = function(o){
	    var minWidth = $(this).data('minwidth'),
	        maxWidth = $(this).data('maxwidth'),
	        val = '',
	        input = $(this),
	        testSubject = $('#'+$(this).data('tester_id'));

	    if (val === (val = input.val())) {return;}

	    // Enter new content into testSubject
	    var escaped = val.replace(/&/g, '&amp;').replace(/\s/g,' ').replace(/</g, '&lt;').replace(/>/g, '&gt;');
	    testSubject.html(escaped);
	    // Calculate new width + whether to change
	    var testerWidth = testSubject.width(),
	        newWidth = (testerWidth + o.comfortZone) >= minWidth ? testerWidth + o.comfortZone : minWidth,
	        currentWidth = input.width(),
	        isValidWidthChange = (newWidth < currentWidth && newWidth >= minWidth)
	                             || (newWidth > minWidth && newWidth < maxWidth);

	    // Animate width
	    if (isValidWidthChange) {
	        input.width(newWidth);
	    }


  };
  $.fn.resetAutosize = function(options){
    // alert(JSON.stringify(options));
    var minWidth =  $(this).data('minwidth') || options.minInputWidth || $(this).width(),
        maxWidth = $(this).data('maxwidth') || options.maxInputWidth || ($(this).closest('.tagsinput').width() - options.inputPadding),
        val = '',
        input = $(this),
        testSubject = $('<tester/>').css({
            position: 'absolute',
            top: -9999,
            left: -9999,
            width: 'auto',
            fontSize: input.css('fontSize'),
            fontFamily: input.css('fontFamily'),
            fontWeight: input.css('fontWeight'),
            letterSpacing: input.css('letterSpacing'),
            whiteSpace: 'nowrap'
        }),
        testerId = $(this).attr('id')+'_autosize_tester';
    if(! $('#'+testerId).length > 0){
      testSubject.attr('id', testerId);
      testSubject.appendTo('body');
    }

    input.data('minwidth', minWidth);
    input.data('maxwidth', maxWidth);
    input.data('tester_id', testerId);
    input.css('width', minWidth);
  };

	$.fn.addTag = function(value,options) {
			options = jQuery.extend({focus:false,callback:true},options);
			this.each(function() {
				var id = $(this).attr('id');

				var tagslist = $(this).val().split(delimiter[id]);
				if (tagslist[0] == '') {
					tagslist = new Array();
				}

				value = jQuery.trim(value);

				if (options.unique) {
					var skipTag = $(this).tagExist(value);
					if(skipTag == true) {
					    //Marks fake input as not_valid to let styling it
    				    $('#'+id+'_tag').addClass('not_valid');
    				}
				} else {
					var skipTag = false;
				}

				if (value !='' && skipTag != true) {
                    $('<span>').addClass('tag').append(
                        $('<span>').text(value).append('&nbsp;&nbsp;'),
                        $('<a class="tagsinput-remove-link">', {
                            href  : '#',
                            title : 'Remove tag',
                            text  : ''
                        }).click(function () {
                            return $('#' + id).removeTag(escape(value));
                        })
                    ).insertBefore('#' + id + '_addTag');

					tagslist.push(value);

					$('#'+id+'_tag').val('');
					if (options.focus) {
						$('#'+id+'_tag').focus();
					} else {
						$('#'+id+'_tag').blur();
					}

					$.fn.tagsInput.updateTagsField(this,tagslist);

					if (options.callback && tags_callbacks[id] && tags_callbacks[id]['onAddTag']) {
						var f = tags_callbacks[id]['onAddTag'];
						f.call(this, value);
					}
					if(tags_callbacks[id] && tags_callbacks[id]['onChange'])
					{
						var i = tagslist.length;
						var f = tags_callbacks[id]['onChange'];
						f.call(this, $(this), tagslist[i-1]);
					}
				}

			});

			return false;
		};

	$.fn.removeTag = function(value) {
			value = unescape(value);
			this.each(function() {
				var id = $(this).attr('id');

				var old = $(this).val().split(delimiter[id]);

				$('#'+id+'_tagsinput .tag').remove();
				str = '';
				for (i=0; i< old.length; i++) {
					if (old[i] != value.trim()) { 
						str = str + delimiter[id] +old[i];
					}
				}

				$.fn.tagsInput.importTags(this,str);

				if (tags_callbacks[id] && tags_callbacks[id]['onRemoveTag']) {
					var f = tags_callbacks[id]['onRemoveTag'];
					f.call(this, value);
				}
			});

			return false;
		};

	$.fn.tagExist = function(val) {
		var id = $(this).attr('id');
		var tagslist = $(this).val().split(delimiter[id]);
		return (jQuery.inArray(val, tagslist) >= 0); //true when tag exists, false when not
	};

	// clear all existing tags and import new ones from a string
	$.fn.importTags = function(str) {
                id = $(this).attr('id');
		$('#'+id+'_tagsinput .tag').remove();
		$.fn.tagsInput.importTags(this,str);
	}

	$.fn.tagsInput = function(options) {
    var settings = jQuery.extend({
      interactive:true,
      defaultText:'',
      minChars:0,
      width:'',
      height:'',
      autocomplete: {selectFirst: false },
      'hide':true,
      'delimiter':',',
      'unique':true,
      removeWithBackspace:true,
      placeholderColor:'#666666',
      autosize: true,
      comfortZone: 20,
      inputPadding: 6*2
    },options);

		this.each(function() {
			if (settings.hide) {
				$(this).hide();
			}
			var id = $(this).attr('id');
			if (!id || delimiter[$(this).attr('id')]) {
				id = $(this).attr('id', 'tags' + new Date().getTime()).attr('id');
			}

			var data = jQuery.extend({
				pid:id,
				real_input: '#'+id,
				holder: '#'+id+'_tagsinput',
				input_wrapper: '#'+id+'_addTag',
				fake_input: '#'+id+'_tag'
			},settings);

			delimiter[id] = data.delimiter;

			if (settings.onAddTag || settings.onRemoveTag || settings.onChange) {
				tags_callbacks[id] = new Array();
				tags_callbacks[id]['onAddTag'] = settings.onAddTag;
				tags_callbacks[id]['onRemoveTag'] = settings.onRemoveTag;
				tags_callbacks[id]['onChange'] = settings.onChange;
			}

            var containerClass = $('#'+id).attr('class').replace('tagsinput', '');
			var markup = '<div id="'+id+'_tagsinput" class="tagsinput '+containerClass+'"><div class="tagsinput-add-container" id="'+id+'_addTag"><div class="tagsinput-add"></div>';

			if (settings.interactive) {
				markup = markup + '<input id="'+id+'_tag" value="" data-default="'+settings.defaultText+'" />';
			}

			markup = markup + '</div></div>';

			$(markup).insertAfter(this);

			$(data.holder).css('width',settings.width);
			$(data.holder).css('min-height',settings.height);
			$(data.holder).css('height','100%');

			if ($(data.real_input).val()!='') {
				$.fn.tagsInput.importTags($(data.real_input),$(data.real_input).val());
			}
			if (settings.interactive) {
				$(data.fake_input).val($(data.fake_input).attr('data-default'));
				$(data.fake_input).css('color',settings.placeholderColor);
		        $(data.fake_input).resetAutosize(settings);

				$(data.holder).bind('click',data,function(event) {
					$(event.data.fake_input).focus();
				});

				$(data.fake_input).bind('focus',data,function(event) {
					if ($(event.data.fake_input).val()==$(event.data.fake_input).attr('data-default')) {
						$(event.data.fake_input).val('');
					}
					$(event.data.fake_input).css('color','#000000');
				});

				if (settings.autocomplete_url != undefined) {
					autocomplete_options = {source: settings.autocomplete_url};
					for (attrname in settings.autocomplete) {
						autocomplete_options[attrname] = settings.autocomplete[attrname];
					}

					if (jQuery.Autocompleter !== undefined) {
						$(data.fake_input).autocomplete(settings.autocomplete_url, settings.autocomplete);
						$(data.fake_input).bind('result',data,function(event,data,formatted) {
							if (data) {
								$('#'+id).addTag(data[0] + "",{focus:true,unique:(settings.unique)});
							}
					  	});
					} else if (jQuery.ui.autocomplete !== undefined) {
						$(data.fake_input).autocomplete(autocomplete_options);
						$(data.fake_input).bind('autocompleteselect',data,function(event,ui) {
							$(event.data.real_input).addTag(ui.item.value,{focus:true,unique:(settings.unique)});
							return false;
						});
					}


				} else {
						// if a user tabs out of the field, create a new tag
						// this is only available if autocomplete is not used.
						$(data.fake_input).bind('blur',data,function(event) {
							var d = $(this).attr('data-default');
							if ($(event.data.fake_input).val()!='' && $(event.data.fake_input).val()!=d) {
								if( (event.data.minChars <= $(event.data.fake_input).val().length) && (!event.data.maxChars || (event.data.maxChars >= $(event.data.fake_input).val().length)) )
									$(event.data.real_input).addTag($(event.data.fake_input).val(),{focus:true,unique:(settings.unique)});
							} else {
								$(event.data.fake_input).val($(event.data.fake_input).attr('data-default'));
								$(event.data.fake_input).css('color',settings.placeholderColor);
							}
							return false;
						});

				}
				// if user types a comma, create a new tag
				$(data.fake_input).bind('keypress',data,function(event) {
					if (event.which==event.data.delimiter.charCodeAt(0) || event.which==13 ) {
					    event.preventDefault();
						if( (event.data.minChars <= $(event.data.fake_input).val().length) && (!event.data.maxChars || (event.data.maxChars >= $(event.data.fake_input).val().length)) )
							$(event.data.real_input).addTag($(event.data.fake_input).val(),{focus:true,unique:(settings.unique)});
					  	$(event.data.fake_input).resetAutosize(settings);
						return false;
					} else if (event.data.autosize) {
			            $(event.data.fake_input).doAutosize(settings);

          			}
				});
				//Delete last tag on backspace
				data.removeWithBackspace && $(data.fake_input).bind('keydown', function(event)
				{
					if(event.keyCode == 8 && $(this).val() == '')
					{
						 event.preventDefault();
						 var last_tag = $(this).closest('.tagsinput').find('.tag:last').text();
						 var id = $(this).attr('id').replace(/_tag$/, '');
						 last_tag = last_tag.replace(/[\s\u00a0]+x$/, '');
						 $('#' + id).removeTag(escape(last_tag));
						 $(this).trigger('focus');
					}
				});
				$(data.fake_input).blur();

				//Removes the not_valid class when user changes the value of the fake input
				if(data.unique) {
				    $(data.fake_input).keydown(function(event){
				        if(event.keyCode == 8 || String.fromCharCode(event.which).match(/\w+|[áéíóúÁÉÍÓÚñÑ,/]+/)) {
				            $(this).removeClass('not_valid');
				        }
				    });
				}
			} // if settings.interactive
		});

		return this;

	};

	$.fn.tagsInput.updateTagsField = function(obj,tagslist) {
		var id = $(obj).attr('id');
		$(obj).val(tagslist.join(delimiter[id]));
	};

	$.fn.tagsInput.importTags = function(obj,val) {
		$(obj).val('');
		var id = $(obj).attr('id');
		var tags = val.split(delimiter[id]);
		for (i=0; i<tags.length; i++) {
			$(obj).addTag(tags[i],{focus:false,callback:false});
		}
		if(tags_callbacks[id] && tags_callbacks[id]['onChange'])
		{
			var f = tags_callbacks[id]['onChange'];
			f.call(obj, obj, tags[i]);
		}
	};

})(jQuery);
