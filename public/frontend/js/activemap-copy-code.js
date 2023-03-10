/* Activ'Map Plugin 2.0.0
 * Copyright (c) 2015-2017 Pandao
 * Documentation : https://activmap.pandao.eu/doc
 */
! function($) {
    $.activmap = {
        defaults: {
            places: [],
            lat: 51.507351,
            lng: -.127758,
            zoom: 10,
            cluster: !0,
            mapType: "roadmap",
            posPanel: "left",
            showPanel: !0,
            radius: 0,
            unit: "km",
            country: null,
            autogeolocate: !1,
            allowMultiSelect: !0,
            icon: "images/icons/marker.png",
            center_icon: "images/icons/marker-center.png",
            styles: [{
                featureType: "administrative.country",
                elementType: "geometry",
                stylers: [{
                    visibility: "simplified"
                }, {
                    hue: "#ff0000"
                }]
            }],
            request: "large",
            locationTypes: ["geocode", "establishment"]
        }
    }, $.arrayIntersect = function(e, a) {
        return $.grep(e, function(e) {
            return $.inArray(e, a) > -1
        })
    }, $.fn.extend({
        activmap: function(settings) {
            var s = $.extend({}, $.activmap.defaults, settings),
                init_latlng = new google.maps.LatLng(s.lat, s.lng),
                latlng = init_latlng,
                opendInfoWindow = null,
                markers = [],
                infoWindow = [],
                ids = [],
                markerCluster, centerMarker, bounds = new google.maps.LatLngBounds,
                num_places = 0,
                old_results = 0,
                mapTypeId = google.maps.MapTypeId.ROADMAP;
            "satellite" != s.mapType && "perspective" != s.mapType || (mapTypeId = google.maps.MapTypeId.HYBRID);
            var map = new google.maps.Map(document.getElementById("activmap-canvas"), {
                zoom: s.zoom,
                center: latlng,
                mapTypeId: mapTypeId,
                styles: s.styles,
                mapTypeControl: !0,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    position: google.maps.ControlPosition.BOTTOM_CENTER
                },
                zoomControl: !0,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_CENTER
                },
                scaleControl: !0,
                streetViewControl: !0,
                streetViewControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                fullscreenControl: !1
            });
            bounds.extend(init_latlng);
            var init_latlngBounds = map.getBounds();
            "perspective" == s.mapType && map.setTilt(45);
            var activmap_canvas = $("#activmap-container"),
                activmap_places = $("#activmap-places"),
                map_w = activmap_canvas.width(),
                cont_w = activmap_places.outerWidth();
            s.showPanel ? ("left" == s.posPanel && (activmap_places.css({
                left: -cont_w,
                right: "auto"
            }), activmap_canvas.css({
                "float": "right"
            })), "right" == s.posPanel && (activmap_places.css({
                right: -cont_w,
                left: "auto"
            }), activmap_canvas.css({
                "float": "left"
            }))) : activmap_places.hide(), $('input[name="activmap_radius"]').length && $('input[name="activmap_radius"]').prop("checked", !1).each(function() {
                s.radius == $(this).val() && $(this).prop("checked", !0)
            }), _init = function() {
                if ($.each(s.places, function(e, a) {
                        a.num_tags = 0, a.id = e;
                        var t = new google.maps.LatLng(a.lat, a.lng),
                            o = "" != a.icon && void 0 != a.icon ? a.icon : s.icon,
                            n = new google.maps.Marker({
                                map: map,
                                position: t,
                                icon: o,
                                title: a.title
                            }),
                            i = '<div class="activmap-infowindow">';
                        void 0 != a.img && "" != a.img && (i += '<div class="activmap-brand"><img src="' + a.img + '"></div>'), i += '<div class="activmap-details"><h4 class="activmap-title">' + a.title + "</h4>", void 0 != a.address && "" != a.address && (i += '<div class="activmap-address">' + a.address + "</div>"), void 0 != a.phone && "" != a.phone && (i += '<div class="activmap-phone">' + a.phone + "</div>"), void 0 != a.url && "" != a.url && (i += '<a href="' + a.url + '" target="_blank" class="activmap-url">' + a.url + "</a>"), i += '</div><div style="clear: both;"></div></div>', infoWindow[e] = new google.maps.InfoWindow({
                            content: i,
                            position: t
                        }), google.maps.event.addListener(infoWindow[e], "closeclick", function() {
                            $(".activmap-place").removeClass("active"), activmap_places.scrollTop()
                        }), google.maps.event.addListener(n, "click", function() {
                            null != opendInfoWindow && opendInfoWindow.close(), infoWindow[e].open(map, n), map.setCenter(n.getPosition());
                            var a = _paddedBounds(20, 280, 50, 50);
                            map.fitBounds(a), opendInfoWindow = infoWindow[e], $(".activmap-place").removeClass("active"), $("#activmap-place_" + e).addClass("active"), activmap_places.scrollTop(activmap_places.scrollTop() + $("#activmap-place_" + e).position().top)
                        }), n.setVisible(!1), a.marker = n, markers.push(n), a.html = '<div class="activmap-place" id="activmap-place_' + e + '"><h3>' + a.title + "</h3><p>" + a.address + "</p></div>", $.each(a.tags, function(e, t) {
                            void 0 === ids[t] && (ids[t] = []), ids[t].push(a.id)
                        })
                    }), s.cluster && (markerCluster = new MarkerClusterer(map, markers, {
                        maxZoom: 12,
                        gridSize: 40
                    })), centerMarker = new google.maps.Marker({
                        map: map,
                        position: latlng,
                        icon: "" != s.center_icon && void 0 != s.center_icon ? s.center_icon : s.icon
                    }), centerMarker.setVisible(!0), markers.push(centerMarker), _order(), 1 == s.autogeolocate && _geolocate(), $("#activmap-geolocate").length && $("#activmap-geolocate").on("click", function() {
                        _geolocate()
                    }), $("#activmap-target").length && $("#activmap-target").on("click", function() {
                        latlng = init_latlng, _update_places_bounds(), _update_map()
                    }), $("#activmap-location").length) {
                    if (null !== s.country) var e = {
                        types: s.locationTypes,
                        componentRestrictions: {
                            country: s.country
                        }
                    };
                    else var e = {
                        types: s.locationTypes
                    };
                    var a = document.getElementById("activmap-location");
                    autocomplete = new google.maps.places.Autocomplete(a, e), google.maps.event.addListener(autocomplete, "place_changed", function() {
                        var e = autocomplete.getPlace();
                        latlng = e.geometry.location, $(".activmap-place").length && _order(), $('input[name="marker_type[]"], select[name="marker_type[]"]').each(function() {
                            _update_places_tag($(this), !1)
                        }), _update_center_marker(), _update_map()
                    })
                }
                $('input[name="activmap_radius"]').on("change", function() {
                    s.radius = $(this).val(), $('input[name="marker_type[]"], select[name="marker_type[]"]').each(function() {
                        _update_places_tag($(this), !1)
                    }), _update_map()
                }), $('input[name="marker_type[]"], select[name="marker_type[]"]').on("change", function() {
                    _update_places_tag($(this), !0), _update_map()
                }), $("#activmap-reset").on("click", function() {
                    return $('input[name="marker_type[]"]').prop("checked", !1), $('select[name="marker_type[]"] > option').prop("selected", !1), $('input[name="marker_type[]"], select[name="marker_type[]"]').each(function() {
                        _update_places_tag($(this), !1)
                    }), latlng = init_latlng, _update_center_marker(), _update_map(), !1
                }), $(document).on("click", ".activmap-place", function() {
                    var e = $(this).attr("id").replace("activmap-place_", "");
                    google.maps.event.trigger(markers[e], "click")
                }), $(window).on("resize", function() {
                    setTimeout("_update_map()", 300)
                }), $('input[name="marker_type[]"]:checked').add($('select[name="marker_type[]"]').prop("selected", !0)).each(function() {
                    _update_places_tag($(this), !1)
                }), _update_map()
            }, _sort_by_dist = function(e, a) {
                return e.dist < a.dist ? -1 : e.dist > a.dist ? 1 : 0
            }, _order = function() {
                $.each(s.places, function(e, a) {
                    a.dist = _get_distance(a.marker.position, latlng)
                }), s.places.sort(_sort_by_dist), $(".activmap-place").remove(), $.each(s.places, function(e, a) {
                    activmap_places.append(a.html), a.isVisible && $("#activmap-place_" + a.id).show()
                })
            }, _update_center_marker = function() {
                centerMarker.setPosition(latlng), _update_places_bounds()
            }, _geolocate = function() {
                navigator.geolocation ? (browserSupportFlag = !0, navigator.geolocation.getCurrentPosition(function(e) {
                    initialLocation = new google.maps.LatLng(e.coords.latitude, e.coords.longitude), latlng = initialLocation, $(".activmap-place").length && _order(), $('input[name="marker_type[]"], select[name="marker_type[]"]').each(function() {
                        _update_places_tag($(this), !1)
                    }), _update_center_marker(), _update_map()
                }, function() {
                    handleNoGeolocation(browserSupportFlag)
                })) : (browserSupportFlag = !1, handleNoGeolocation(browserSupportFlag))
            }, _handleNoGeolocation = function(e) {
                1 == e ? (console.log("Geolocation service failed."), initialLocation = latlng) : (console.log("Your browser doesn't support geolocation."), initialLocation = latlng), map.setCenter(initialLocation)
            }, _rad = function(e) {
                return e * Math.PI / 180
            }, _paddedBounds = function(e, a, t, o) {
                var n = map.getBounds().getSouthWest(),
                    i = map.getBounds().getNorthEast(),
                    s = map.getProjection().fromLatLngToPoint(i),
                    p = map.getProjection().fromLatLngToPoint(n),
                    c = Math.pow(2, map.getZoom()),
                    l = map.getProjection().fromLatLngToPoint(n),
                    r = new google.maps.Point((l.x - p.x) * c + o, (l.y - s.y) * c - a),
                    m = new google.maps.Point(r.x / c + p.x, r.y / c + s.y),
                    d = map.getProjection().fromPointToLatLng(m),
                    u = map.getProjection().fromLatLngToPoint(i),
                    _ = new google.maps.Point((u.x - p.x) * c - t, (u.y - s.y) * c + e),
                    g = new google.maps.Point(_.x / c + p.x, _.y / c + s.y),
                    v = map.getProjection().fromPointToLatLng(g);
                return new google.maps.LatLngBounds(d, v)
            }, _get_distance = function(e, a) {
                var t = "km" == s.unit ? 6378137 : 3963190,
                    o = _rad(a.lat() - e.lat()),
                    n = _rad(a.lng() - e.lng()),
                    i = Math.sin(o / 2) * Math.sin(o / 2) + Math.cos(_rad(e.lat())) * Math.cos(_rad(a.lat())) * Math.sin(n / 2) * Math.sin(n / 2),
                    p = 2 * Math.atan2(Math.sqrt(i), Math.sqrt(1 - i)),
                    c = t * p;
                return c
            }, _update_map = function() {
                map_w = $("#activmap-wrapper").width(), cont_w = activmap_places.outerWidth(), num_places > 0 ? 0 == old_results ? s.showPanel && ("left" == s.posPanel && activmap_places.stop(!0, !0).animate({
                    left: 0
                }, 400), "right" == s.posPanel && activmap_places.stop(!0, !0).animate({
                    right: 0
                }, 400), activmap_places.is(":visible") && activmap_canvas.animate({
                    width: map_w - cont_w
                }, 400)) : s.showPanel && activmap_places.is(":visible") && $(window).width() + 17 > 1190 ? activmap_canvas.width(map_w - cont_w) : activmap_canvas.width(map_w) : (null != opendInfoWindow && opendInfoWindow.close(), s.showPanel && activmap_places.is(":visible") && $(window).width() + 17 > 1190 ? (activmap_canvas.animate({
                    width: map_w
                }, 400), "left" == s.posPanel && activmap_places.animate({
                    left: -cont_w
                }, 400), "right" == s.posPanel && activmap_places.animate({
                    right: -cont_w
                }, 400)) : activmap_canvas.width(map_w)), old_results = num_places, setTimeout("_map_resize()", 400)
            }, _map_resize = function() {
                google.maps.event.trigger(map, "resize");
                google.maps.event.addListenerOnce(map, "idle", function() {
                    map.getZoom() > 16 && map.setZoom(16)
                });
                if (num_places > 0) {
                    map.fitBounds(bounds);
                    var e = _paddedBounds(10, 150, 50, 50);
                    map.fitBounds(e), s.cluster && markerCluster.repaint()
                } else map.setZoom(s.zoom), map.setCenter(latlng)
            }, _update_places_bounds = function() {
                bounds = new google.maps.LatLngBounds;
                var e = 0;
                $.each(s.places, function(a, t) {
                    1 == t.isVisible && (bounds.extend(t.marker.getPosition()), e++)
                }), bounds.extend(centerMarker.getPosition()), num_places = e
            }, _update_places_tag = function(e, a) {
                s.allowMultiSelect || a && ($(".marker-selector").removeClass("active"), $('input[name="marker_type[]"]').not(e).prop("checked", !1), $('select[name="marker_type[]"]').not(e).find("option").prop("selected", !1));
                var t = "SELECT" == e.prop("tagName") ? e.prop("selected") : e.prop("checked");
                1 == t ? e.parents(".marker-selector").addClass("active") : e.parents(".marker-selector").removeClass("active");
                var o, n = 0,
                    i = [],
                    p = [];
                $('input[name="marker_type[]"]:checked').add($('select[name="marker_type[]"]').prop("selected", !0)).each(function() {
                    o = $(this).val(), "" != o && (void 0 === ids[o] && (ids[o] = []), 0 == n ? i = $.merge([], ids[o]) : ("strict" == s.request && (i = $.arrayIntersect(ids[o], i)), "large" == s.request && (p = $.merge([], ids[o]), i = $.merge(p, i))), n++)
                }), null != opendInfoWindow && opendInfoWindow.close(), $.each(s.places, function(e, a) {
                    a.num_tags = 0, a.dist = 0, $.inArray(a.id, i) >= 0 ? (a.dist = _get_distance(a.marker.position, latlng), 0 == s.radius || a.dist <= 1e3 * s.radius ? (a.num_tags++, a.marker.setVisible(!0), a.isVisible = !0, $("#activmap-place_" + a.id).show()) : (a.num_tags > 0 && a.num_tags--, 0 == a.num_tags && (a.marker.setVisible(!1), a.isVisible = !1, a.isVisible = !1, $("#activmap-place_" + a.id).hide()))) : (a.num_tags > 0 && a.num_tags--, 0 == a.num_tags && (a.marker.setVisible(!1), a.isVisible = !1, $("#activmap-place_" + a.id).hide()))
                }), _update_places_bounds(), $("#activmap-results-num").html(num_places + " result(s)")
            }, Array.isArray(s.places) ? _init() : $.ajax({
                url: s.places,
                dataType: "json",
                cache: !1,
                error: function(e, a, t) {
                    console.log(e), console.log(a), console.log(t)
                },
                success: function(data) {
                    var obj = eval(data);
                    s.places = obj.places, _init()
                }
            })
        }
    })
}(jQuery);