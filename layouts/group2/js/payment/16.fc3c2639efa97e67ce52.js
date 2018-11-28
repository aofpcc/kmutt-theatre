webpackJsonp([16], {
    1075: function (c, e) {
        c.exports = {
            render: function () {
                var c = this,
                    e = c.$createElement,
                    t = c._self._c || e;
                return t("div", {
                    staticClass: "section-buy-concession"
                }, [t("div", {
                    staticClass: "container"
                }, [t("div", {
                    staticClass: "row"
                }, [t("div", {
                    staticClass: "col-md-10 col-md-offset-1"
                }, [t("div", {
                    staticClass: "buy-concession-wrapper",
                    class: {
                        "visible-xs-block": !c.booking.concession || 0 === Object.keys(c.booking.concession).length || 0 === Object.keys(c.concession_list.item).length
                    }
                }, [t("div", {
                    staticClass: "group selected-seat"
                }, [t("div", {
                    staticClass: "group-body"
                }, [t("h3", {
                    staticClass: "heading"
                }, [c._v(c._s("en" === c.app.lang ? "Your Seats" : "ที่นั่ง"))]), t("ul", [t("li", {
                    staticClass: "item"
                }, [c._v(c._s(c.selectedSeats.join(", ")))]), t("li", {
                    staticClass: "price"
                }, [c._v(c._s(c.priceFormat(c.booking.selected.price_all)) + " " + c._s(c.language.thb[c.app.lang]))])])])]), c.booking.concession && Object.keys(c.booking.concession).length > 0 && Object.keys(c.concession_list.item).length > 0 ? t("div", {
                    staticClass: "group concession-list"
                }, [t("div", {
                    staticClass: "group-body"
                }, [t("h3", {
                    staticClass: "heading"
                }, [c._v(c._s("en" === c.app.lang ? "Combo Set" : "ชุดป๊อปคอร์นและเครื่องดื่ม"))]), t("ul", [t("li", {
                    staticClass: "item"
                }, [c._v(c._s(c.language.quantity[c.app.lang]) + " " + c._s(c.totalQty) + " " + c._s("en" === c.app.lang ? "pcs" : "รายการ"))]), t("li", {
                    staticClass: "price"
                }, [c._v(c._s(c.priceFormat(c.totalPrice)) + " " + c._s(c.language.thb[c.app.lang]))])]), t("a", {
                    staticClass: "toggle-list",
                    class: {
                        toggled: c.toggleConcession
                    },
                    attrs: {
                        href: "#"
                    },
                    on: {
                        click: function (e) {
                            e.preventDefault(), c.toggleConcession = !c.toggleConcession
                        }
                    }
                }, [t("span")])]), t("div", {
                    staticClass: "sub-group",
                    class: {
                        toggled: c.toggleConcession
                    }
                }, [t("ul", c._l(Object.keys(c.booking.concession), function (e) {
                    return c.concession_list.item[e] && Object.keys(c.concession_list.item[e]).length > 0 ? t("li", [t("div", {
                        staticClass: "name"
                    }, [c._v(c._s(c.concession_list.item[e].name[c.app.lang]))]), t("div", {
                        staticClass: "qty"
                    }, [c._v("x" + c._s(c.booking.concession[e]))]), t("div", {
                        staticClass: "price"
                    }, [c._v(c._s(c.priceFormat(c.concession_list.item[e].price * c.booking.concession[e])) + " " + c._s(c.language.thb[c.app.lang]))])]) : c._e()
                }))]), t("div", {
                    staticClass: "action"
                }, [t("button", {
                    staticClass: "button button-blue button-edit",
                    attrs: {
                        type: "button"
                    },
                    on: {
                        click: function (e) {
                            c.$router.push({
                                name: "Concession"
                            })
                        }
                    }
                }, [c._v(c._s("en" === c.app.lang ? "Edit Concession" : "แก้ไข"))]), t("router-link", {
                    staticClass: "button-link-edit",
                    attrs: {
                        to: {
                            name: "Concession"
                        }
                    }
                }, [t("img", {
                    attrs: {
                        src: "/assets/icon/icon-edit.png",
                        alt: ""
                    }
                }), c._v(" " + c._s("en" === c.app.lang ? "Edit" : "แก้ไข") + " ")])], 1)]) : c._e()]), "paynow" === c.showtime.from || c.booking.concession && 0 !== Object.keys(c.booking.concession).length && 0 !== Object.keys(c.concession_list.item).length || !c.app.concession_banner.image_url ? c._e() : t("div", {
                    staticClass: "concession-banner"
                }, [t("router-link", {
                    attrs: {
                        to: {
                            name: "Concession"
                        }
                    }
                }, [t("img", {
                    attrs: {
                        src: c.app.concession_banner.image_url + "=w945",
                        alt: ""
                    }
                })])], 1)])])])])
            },
            staticRenderFns: []
        }
    },
    1099: function (c, e) {
        c.exports = {
            render: function () {
                var c = this,
                    e = c.$createElement,
                    t = c._self._c || e;
                return t("no-ssr", [t("div", {
                    staticClass: "page-payment",
                    attrs: {
                        id: "main"
                    }
                }, [c.payWithSFCard ? c._e() : t("step-bar", {
                    attrs: {
                        lang: c.app.lang,
                        "current-step": 2
                    }
                }), Object.keys(c.booking.selected).length ? [c.showtime_data.movie && !c.payWithSFCard ? t("div", {
                    staticClass: "section-movie-detail"
                }, [t("box-movie-detail", {
                    attrs: {
                        showtime: c.showtime_data,
                        selected: c.booking.selected
                    }
                })], 1) : c._e(), c.payWithSFCard ? c._e() : t("buy-concession", {
                    attrs: {
                        booking: c.booking,
                        showtime: c.showtime_data
                    }
                }), t("div", {
                    staticClass: "info-bar"
                }, [t("div", {
                    staticClass: "container"
                }, [t("div", {
                    staticClass: "info-bar-inner"
                }, [t("div", {
                    staticClass: "row"
                }, [t("div", {
                    staticClass: "col-xs-12 col-sm-6 col-sm-offset-3"
                }, [t("div", {
                    staticClass: "total-price"
                }, [t("p", [t("span", [c._v(c._s("en" === c.app.lang ? "Total" : "ยอดชำระ"))]), c._v(" " + c._s(c.priceFormat(c.totalPrice)) + " " + c._s(c.language.thb[c.app.lang]))])])]), t("div", {
                    staticClass: "col-xs-12 col-sm-3"
                }, [t("div", {
                    staticClass: "time-left"
                }, [t("div", {
                    staticClass: "box"
                }, [t("p", {
                    staticClass: "text"
                }, [c._v(c._s(c.language.time_left[c.app.lang]))]), t("p", {
                    staticClass: "time"
                }, [c._v(c._s(c.purchaseTimeLeft))])])])])])])])]), t("div", {
                    staticClass: "section-payment"
                }, [t("div", {
                    staticClass: "container"
                }, [c.payWithSFCard ? c._e() : t("div", {
                    staticClass: "box-payment"
                }, [t("div", {
                    staticClass: "row"
                }, [t("div", {
                    staticClass: "col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"
                }, ["paynow" !== c.showtime_data.from ? t("div", {
                    staticClass: "tab-button",
                    class: {
                        togged: "" !== c.currentTab
                    }
                }, [t("button", {
                    staticClass: "button button-buy",
                    class: {
                        active: "buy" === c.currentTab, inactive: "" === c.currentTab
                    },
                    attrs: {
                        type: "button",
                        disabled: "buy" === c.currentTab
                    },
                    on: {
                        click: function (e) {
                            c.currentTab = "buy"
                        }
                    }
                }, [c._v(c._s(c.language.buy[c.app.lang]))]), 0 !== c.totalPrice ? [t("button", {
                    staticClass: "button button-reserve",
                    class: {
                        active: "reserve" === c.currentTab, inactive: "" === c.currentTab
                    },
                    attrs: {
                        type: "button",
                        disabled: "reserve" === c.currentTab
                    },
                    on: {
                        click: function (e) {
                            c.currentTab = "reserve"
                        }
                    }
                }, [c._v(c._s(c.language.reserve[c.app.lang]))])] : c._e()], 2) : c._e(), "" !== c.currentTab ? t("div", {
                    staticClass: "box-wrapper"
                }, ["paynow" !== c.showtime_data.from ? ["reserve" === c.currentTab ? t("div", {
                    staticClass: "heading"
                }, [c._v(c._s(c.language.reservation[c.app.lang]))]) : t("div", {
                    staticClass: "heading"
                }, [c._v(c._s(c.language.confirmation[c.app.lang]))]), t("div", {
                    staticClass: "sub-heading"
                }, [c._v(c._s(c.language.fill_info[c.app.lang]))]), t("input", {
                    staticClass: "input form-control",
                    class: {
                        "is-warning": Object.keys(c.formErrors).length && c.formErrors.has("email")
                    },
                    attrs: {
                        type: "email",
                        placeholder: c.language.email_address[c.app.lang],
                        name: "email",
                        disabled: "reserve" === c.currentTab && (c.selectedSeats.length > c.app.settings.max_reserve_seat || !c.reserveTime || c.isSessionMaximumReserve || Object.keys(c.booking.concession).length > 0 || !c.isLogedIn || c.blacklist.is_blacklist || c.isPaidOnly || c.isPromotionPrice)
                    },
                    domProps: {
                        value: c.getEmail
                    },
                    on: {
                        input: c.setEmail
                    }
                }), t("input", {
                    staticClass: "input form-control",
                    class: {
                        "is-warning": Object.keys(c.formErrors).length && c.formErrors.has("mobile")
                    },
                    attrs: {
                        type: "tel",
                        placeholder: c.language.mobile[c.app.lang],
                        name: "mobile",
                        maxlength: "10",
                        disabled: "reserve" === c.currentTab && (c.selectedSeats.length > c.app.settings.max_reserve_seat || !c.reserveTime || c.isSessionMaximumReserve || Object.keys(c.booking.concession).length > 0 || !c.isLogedIn || c.blacklist.is_blacklist || c.isPaidOnly || c.isPromotionPrice)
                    },
                    domProps: {
                        value: c.getPhoneNumber
                    },
                    on: {
                        input: c.setPhoneNumber
                    }
                }), "reserve" === c.currentTab ? [c.isLogedIn ? c._e() : t("p", {
                    staticClass: "error-text"
                }, ["en" === c.app.lang ? [c._v("\n                                                    Please "), t("a", {
                    attrs: {
                        href: "#"
                    },
                    on: {
                        click: function (e) {
                            return e.preventDefault(), c.openPopup(e)
                        }
                    }
                }, [c._v("login")]), c._v(" to reserve\n                                                ")] : [c._v("\n                                                    กรุณา "), t("a", {
                    attrs: {
                        href: "#"
                    },
                    on: {
                        click: function (e) {
                            return e.preventDefault(), c.openPopup(e)
                        }
                    }
                }, [c._v("เข้าสู่ระบบ")]), c._v(" เพื่อทำรายการจอง\n                                                ")]], 2), c.reserveTime ? c._e() : t("p", {
                    staticClass: "error-text"
                }, [c._v("\n                                                " + c._s("en" === c.app.lang ? "You can reserve tickets at least " + c.app.settings.max_reserve_minute + " minutes before the session start." : "จำกัดการจอง " + c.app.settings.max_reserve_minute + " นาที ก่อนรอบฉาย") + "\n                                            ")]), c.isSessionMaximumReserve ? t("p", {
                    staticClass: "error-text"
                }, [c._v("\n                                                " + c._s(c.language.maximum_reserve[c.app.lang]))]) : c.selectedSeats.length > c.app.settings.max_reserve_seat ? t("p", {
                    staticClass: "error-text"
                }, [c._v("\n                                                " + c._s("en" === c.app.lang ? "Limit " + c.app.settings.max_reserve_seat + " seats for reservation." : "ทำรายการจองได้ไม่เกิน " + c.app.settings.max_reserve_seat + " ที่นั่ง") + "\n                                            ")]) : c._e()] : c._e()] : c._e(), "reserve" === c.currentTab ? [c.isPaidOnly ? [t("p", {
                    staticClass: "error-text"
                }, [c._v(c._s(c.language.no_reserve[c.app.lang]))])] : c.isPromotionPrice ? [t("p", {
                    staticClass: "error-text"
                }, [c._v(c._s("en" === c.app.lang ? "Reservation is not allowed for special price seats." : "ไม่สามารถจองที่นั่งราคาพิเศษได้"))])] : Object.keys(c.booking.concession).length > 0 ? [t("p", {
                    staticClass: "error-text"
                }, [c._v(c._s("en" === c.app.lang ? "Combo set cannot be reserved." : "ชุดป๊อปคอร์นและเครื่องดื่ม สำหรับรายการซื้อเท่านั้น"))])] : [!c.reserveTime || !c.isLogedIn || c.blacklist.is_blacklist || c.selectedSeats.length > c.app.settings.max_reserve_seat ? c._e() : t("p", {
                    staticClass: "helper-text"
                }, [c._v(c._s(c.app.settings.ticket_reserve_text[c.app.lang]))]), c.blacklist.is_blacklist ? t("p", {
                    staticClass: "error-text"
                }, [c._v(c._s(c.app.settings.blacklist_popup_text[c.app.lang]))]) : c._e()], t("div", {
                    staticClass: "btn-wrapper"
                }, [t("button", {
                    staticClass: "button btn-block button-blue",
                    attrs: {
                        type: "button",
                        disabled: c.selectedSeats.length > c.app.settings.max_reserve_seat || Object.keys(c.formErrors).length && c.formErrors.items.length > 0 || "" === c.customerEmail || "" === c.customerPhone || !c.reserveTime || c.isSessionMaximumReserve || c.isPaidOnly || Object.keys(c.booking.concession).length > 0 || !c.isLogedIn || c.blacklist.is_blacklist || c.isPromotionPrice
                    },
                    on: {
                        click: c.reserveTicket
                    }
                }, [c._v(c._s(c.language.continue[c.app.lang]))])])] : "buy" === c.currentTab && 0 === c.totalPrice ? [t("div", {
                    staticClass: "btn-wrapper"
                }, [t("button", {
                    staticClass: "button btn-block button-blue button-purchase",
                    attrs: {
                        type: "button",
                        disabled: c.disableBuyTicket
                    },
                    on: {
                        click: c.buyTicket
                    }
                }, [c._v(c._s(c.language.continue[c.app.lang]))])])] : [t("div", {
                    staticClass: "heading"
                }, [c._v(c._s(c.language.select_payment[c.app.lang]))]), t("div", {
                    staticClass: "btn-wrapper"
                }, [t("div", {
                    staticClass: "payment-method"
                }, [c.showSFCard && "paynow" !== c.showtime_data.from ? t("div", {
                    staticClass: "inner"
                }, [t("div", {
                    staticClass: "method sf-card",
                    class: {
                        active: "sf-card" === c.payment_method
                    },
                    on: {
                        click: function (e) {
                            c.payment_method = "sf-card"
                        }
                    }
                }, [t("svg", {
                    staticClass: "sf-icon sf-card",
                    attrs: {
                        xmlns: "http://www.w3.org/2000/svg",
                        viewBox: "0 0 93 57.81"
                    }
                }, [t("g", {
                    attrs: {
                        id: "Layer_2",
                        "data-name": "Layer 2"
                    }
                }, [t("g", {
                    attrs: {
                        id: "Layer_1-2",
                        "data-name": "Layer 1"
                    }
                }, [t("polygon", {
                    staticClass: "fill",
                    attrs: {
                        fill: "#2f66cd",
                        points: "53.7 34.28 53.67 34.38 53.75 34.36 53.75 34.28 53.7 34.28"
                    }
                }), t("path", {
                    staticClass: "fill",
                    attrs: {
                        fill: "#2f66cd",
                        d: "M91,0H2A2,2,0,0,0,0,2V50.6L45.35,36.9V32.43H49l.83,3.11,1.58-.48.7-2.63H55.8v1.31l2-.61a2.39,2.39,0,0,1,2-.82h.73l5.81-1.76H63.61a2.26,2.26,0,0,1,2.57-1.83h6.26l.71-.22a.86.86,0,0,0,.32-.66V27.7a.79.79,0,0,0-.88-.77H66.33a2.64,2.64,0,0,1-2.73-2.62V24.2a2.73,2.73,0,0,1,2.73-2.73h9.1a2.34,2.34,0,0,1-2.57,2H66.43a.79.79,0,0,0-.87.77v.13a.79.79,0,0,0,.87.77H72.7a2.64,2.64,0,0,1,2.73,2.61v0a2.71,2.71,0,0,1,.43-1.38l.07-.11,0-.07.06-.06a2.86,2.86,0,0,1,2.55-1h5.83L93,22.49V2A2,2,0,0,0,91,0ZM86.38,23.42H77.89c-1.84,0-2.15-1-2.46-2H86.38Z"
                    }
                }), t("path", {
                    staticClass: "fill",
                    attrs: {
                        fill: "#2f66cd",
                        d: "M78.15,27l-.22.07Z"
                    }
                }), t("polygon", {
                    staticClass: "fill",
                    attrs: {
                        fill: "#2f66cd",
                        points: "47.4 34.28 47.4 36.28 47.94 36.11 47.45 34.28 47.4 34.28"
                    }
                }), t("path", {
                    staticClass: "fill2",
                    attrs: {
                        fill: "#3d7fd2",
                        d: "M73.15,28.49l-.71.22h.15A.85.85,0,0,0,73.15,28.49Z"
                    }
                }), t("polygon", {
                    staticClass: "fill2",
                    attrs: {
                        fill: "#3d7fd2",
                        points: "50.6 38.16 51.43 35.06 49.85 35.53 50.55 38.16 50.6 38.16"
                    }
                }), t("path", {
                    staticClass: "fill2",
                    attrs: {
                        fill: "#3d7fd2",
                        d: "M60.12,39.18h2.36c.59,0,.75-.11.75-.88V35.05c0-.77-.16-.88-.75-.88H60.12c-.59,0-.74.11-.74.88V38.3C59.38,39.07,59.53,39.18,60.12,39.18Z"
                    }
                }), t("path", {
                    staticClass: "fill2",
                    attrs: {
                        fill: "#3d7fd2",
                        d: "M86.38,25.09v1.84h-8a1.55,1.55,0,0,0-.21,0l-.22.07a.86.86,0,0,0-.55.87v2.61H75.43v-2.7a2.73,2.73,0,0,1-2.73,2.72H66.34l-5.81,1.76H62.8a2.2,2.2,0,0,1,2.48,2.42v3.88A2.2,2.2,0,0,1,62.8,41h-3a2.2,2.2,0,0,1-2.47-2.43V34.73a2.54,2.54,0,0,1,.47-1.6l-2,.61v7.17h-2V34.36l-.08,0L52.17,40H49l-1-3.91-.54.17v4.63h-2v-4L0,50.6v5.21a2,2,0,0,0,2,2H91a2,2,0,0,0,2-2V22.49l-8.58,2.6ZM60.74,44.59h-3.9c-.59,0-.75.11-.75.88v3.25c0,.77.16.88.75.88h3.9v1.86H56.52A2.2,2.2,0,0,1,54,49V45.15a2.2,2.2,0,0,1,2.48-2.42h4.22Zm7.6,6.74H62V42.85h2v6.63h4.34Zm.3-10.42-2.86-8.48H68l2.08,6.63h.2l2.09-6.63h2.26L71.8,40.91H68.64ZM77,49a2.2,2.2,0,0,1-2.47,2.43H71.76A2.2,2.2,0,0,1,69.29,49V42.85h2v5.87c0,.77.16.88.74.88h2.13c.58,0,.74-.11.74-.88V42.85h2Zm.67-8.12h-2V32.43h2Zm1.72-8.48h6.67v1.85H81.44v1.4h4.12v1.86H81.44v1.52h4.62v1.85H79.39Zm6.79,16.84A1.89,1.89,0,0,1,84,51.33H78.65V42.85H83.6a1.89,1.89,0,0,1,2.16,2.06v.63a1.34,1.34,0,0,1-.67,1.29,1.47,1.47,0,0,1,1.09,1.59Z"
                    }
                }), t("path", {
                    staticClass: "fill2",
                    attrs: {
                        fill: "#3d7fd2",
                        d: "M83.56,47.93H80.7v1.55h2.86c.43,0,.57-.1.57-.6v-.35C84.13,48,84,47.93,83.56,47.93Z"
                    }
                }), t("path", {
                    staticClass: "fill2",
                    attrs: {
                        fill: "#3d7fd2",
                        d: "M83.71,45.47v-.15c0-.51-.12-.61-.56-.61H80.7v1.37h2.45C83.59,46.08,83.71,46,83.71,45.47Z"
                    }
                })])])]), t("span", {
                    staticClass: "method-label"
                }, [c._v(c._s(c.language.sf_card[c.app.lang]))])])]) : c._e(), t("div", {
                    staticClass: "inner"
                }, [t("div", {
                    staticClass: "method k-plus",
                    class: {
                        active: "k-plus" === c.payment_method
                    },
                    on: {
                        click: function (e) {
                            c.payment_method = "k-plus"
                        }
                    }
                }, [t("svg", {
                    staticClass: "sf-icon k-plus",
                    staticStyle: {
                        "enable-background": "new 0 0 84 84"
                    },
                    attrs: {
                        version: "1.1",
                        xmlns: "http://www.w3.org/2000/svg",
                        "xmlns:xlink": "http://www.w3.org/1999/xlink",
                        x: "0px",
                        y: "0px",
                        viewBox: "0 0 84 84",
                        "xml:space": "preserve"
                    }
                }, [t("path", {
                    staticClass: "st0 fill",
                    attrs: {
                        d: "M74.4,2.5C71.3,0.9,68.3,0,60,0h-36C15.6,0,12.6,0.9,9.6,2.5c-3,1.6-5.5,4.1-7.1,7.1\n                                                            C0.9,12.6,0,15.6,0,24v36c0,8.3,0.9,11.3,2.5,14.4c1.6,3,4.1,5.5,7.1,7.1c3,1.6,6.1,2.5,14.4,2.5h36c8.3,0,11.3-0.9,14.4-2.5\n                                                            c3-1.6,5.5-4.1,7.1-7.1c1.6-3,2.5-6.1,2.5-14.4V24c0-8.3-0.9-11.3-2.5-14.4C79.8,6.5,77.4,4.1,74.4,2.5z"
                    }
                }), t("rect", {
                    attrs: {
                        fill: "#FFFFFF",
                        id: "Rectangle",
                        x: "10.9",
                        y: "24.8",
                        width: "7.8",
                        height: "34.2"
                    }
                }), t("path", {
                    attrs: {
                        fill: "#FFFFFF",
                        d: "M33.4,41.9l13.2-17.1h-7c-3.1,0-4.4,1.7-5.5,3.1l-10.8,14l10.8,14c1.1,1.4,2.4,3.1,5.5,3.1h7L33.4,41.9\n                                                            L33.4,41.9z"
                    }
                }), t("polygon", {
                    attrs: {
                        fill: "#FFFFFF",
                        points: "73.1,45.8 64.5,45.8 64.5,37.2 59.8,37.2 59.8,45.8 51.3,45.8 51.3,50.4 59.8,50.4 \n                                                            59.8,59 64.5,59 64.5,50.4 73.1,50.4 "
                    }
                })]), t("span", {
                    staticClass: "method-label"
                }, [c._v(c._s(c.language.kbank[c.app.lang]))])])]), c.showCreditCard ? t("div", {
                    staticClass: "inner"
                }, [t("div", {
                    staticClass: "method",
                    class: {
                        active: "credit-card" === c.payment_method
                    },
                    on: {
                        click: function (e) {
                            c.payment_method = "credit-card"
                        }
                    }
                }, [t("svg", {
                    staticClass: "sf-icon credit",
                    attrs: {
                        version: "1.1",
                        id: "Layer_1",
                        xmlns: "http://www.w3.org/2000/svg",
                        "xmlns:xlink": "http://www.w3.org/1999/xlink",
                        x: "0px",
                        y: "0px",
                        viewBox: "0 0 412.145 271.744",
                        "enable-background": "new 0 0 412.145 271.744",
                        "xml:space": "preserve"
                    }
                }, [t("g", [t("defs", [t("rect", {
                    attrs: {
                        id: "SVGID_1_",
                        width: "412.145",
                        height: "271.744"
                    }
                })]), t("clipPath", {
                    attrs: {
                        id: "SVGID_2_"
                    }
                }, [t("use", {
                    attrs: {
                        "xlink:href": "#SVGID_1_",
                        overflow: "visible"
                    }
                })]), t("path", {
                    staticClass: "fill",
                    attrs: {
                        "clip-path": "url(#SVGID_2_)",
                        fill: "#404148",
                        d: "M385.279,0H26.865C12.032,0,0,12.025,0,26.865v27.414h412.145V26.865C412.145,12.025,400.12,0,385.279,0"
                    }
                }), t("path", {
                    staticClass: "fill",
                    attrs: {
                        "clip-path": "url(#SVGID_2_)",
                        fill: "#404148",
                        d: "M0,108.256V244.88c0,14.84,12.032,26.864,26.865,26.864H385.28c14.84,0,26.864-12.024,26.864-26.864V108.256H0z M90.822,235.275c0,4.4-3.6,8-8,8h-52c-4.4,0-8-3.6-8-8v-25c0-4.399,3.6-8,8-8h52c4.4,0,8,3.601,8,8V235.275z"
                    }
                })])]), t("span", {
                    staticClass: "method-label"
                }, [c._v(c._s(c.language.credit[c.app.lang]))])])]) : c._e()]), "credit-card" === c.payment_method ? t("div", {
                    staticClass: "pay-with-credit-card"
                }, [Object.keys(c.creditCardListData).length && c.creditCardListData.cards && c.creditCardListData.cards.length ? [t("div", {
                    staticClass: "card-list"
                }, [c._l(c.creditCardListData.cards, function (e, n) {
                    return c.findMatchPromotionCreditCard(e) ? t("div", {
                        key: n,
                        staticClass: "card-item",
                        class: {
                            active: c.selectedCreditCard === n
                        }
                    }, [t("a", {
                        staticClass: "inner",
                        attrs: {
                            href: "#"
                        },
                        on: {
                            click: function (e) {
                                e.preventDefault(), c.selectedCreditCard = n
                            }
                        }
                    }, [c.selectedCreditCard === n ? [t("div", {
                        staticClass: "check"
                    }, [t("img", {
                        attrs: {
                            src: "assets/icon/icon-checked.svg",
                            alt: ""
                        }
                    })])] : c._e(), t("div", {
                        staticClass: "number"
                    }, [t("span", [c._v(c._s(e.card_masking))])]), "master" === e.brand ? [t("div", {
                        staticClass: "type"
                    }, [t("img", {
                        attrs: {
                            src: "assets/icon/card-mastercard.png",
                            alt: ""
                        }
                    })])] : [t("div", {
                        staticClass: "type"
                    }, [t("img", {
                        attrs: {
                            src: "assets/icon/card-visa.png",
                            alt: ""
                        }
                    })])]], 2)]) : c._e()
                }), null !== c.selectedCreditCard ? t("div", {
                    staticClass: "card-item list-button"
                }, [t("a", {
                    staticClass: "inner",
                    attrs: {
                        href: "#"
                    },
                    on: {
                        click: function (e) {
                            e.preventDefault(), c.selectedCreditCard = null
                        }
                    }
                }, [t("div", {
                    staticClass: "icon"
                }, [t("img", {
                    attrs: {
                        src: "assets/icon/icon-plus.svg",
                        alt: ""
                    }
                })]), t("div", {
                    staticClass: "name"
                }, [t("span", [c._v(c._s("en" === c.app.lang ? "Add new card" : "เพิ่มบัตรใหม่"))])])])]) : c._e()], 2)] : c._e(), t("div", {
                    directives: [{
                        name: "show",
                        rawName: "v-show",
                        value: !Object.keys(c.creditCardListData).length || !c.creditCardListData.cards || !c.creditCardListData.cards.length || null === c.selectedCreditCard,
                        expression: "!Object.keys(creditCardListData).length || !creditCardListData.cards || !creditCardListData.cards.length || selectedCreditCard === null"
                    }],
                    staticClass: "new-card"
                }, [t("div", {
                    staticClass: "sub-heading text-center"
                }, [c._v(c._s("en" === c.app.lang ? "Please insert card details" : "กรุณากรอกข้อมูลบัตร"))]), t("div", {
                    staticClass: "form-group name-on-card",
                    class: {
                        "has-error": Object.keys(c.formErrors4).length && c.formErrors4.has("card_name")
                    }
                }, ["en" === c.app.lang ? [t("input", {
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "Name on card",
                        name: "name_on_card"
                    },
                    domProps: {
                        value: c.cardName.toUpperCase()
                    },
                    on: {
                        input: function (e) {
                            c.cardName = e.target.value.toUpperCase()
                        }
                    }
                })] : [t("input", {
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "ชื่อผู้ถือบัตร",
                        name: "name_on_card"
                    },
                    domProps: {
                        value: c.cardName.toUpperCase()
                    },
                    on: {
                        input: function (e) {
                            c.cardName = e.target.value.toUpperCase()
                        }
                    }
                })]], 2), t("div", {
                    staticClass: "form-group card-number",
                    class: {
                        "has-icon": "" !== c.cardType && "unknown" !== c.cardType, "has-error": Object.keys(c.formErrors4).length && c.formErrors4.has("card_number")
                    }
                }, ["en" === c.app.lang ? [t("input", {
                    ref: "cardNumber",
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "Card number",
                        name: "card_number",
                        disabled: c.promotionCreditCardFound
                    }
                })] : [t("input", {
                    ref: "cardNumber",
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "หมายเลขบัตร",
                        name: "card_number",
                        disabled: c.promotionCreditCardFound
                    }
                })], "" !== c.cardType && "unknown" !== c.cardType ? t("div", {
                    staticClass: "input-icon"
                }, ["visa" === c.cardType ? t("img", {
                    attrs: {
                        src: "assets/icon/card-visa.png",
                        alt: ""
                    }
                }) : "mastercard" === c.cardType ? t("img", {
                    attrs: {
                        src: "assets/icon/card-mastercard.png",
                        alt: ""
                    }
                }) : "amex" === c.cardType ? t("img", {
                    attrs: {
                        src: "assets/icon/card-american-express.png",
                        alt: ""
                    }
                }) : "jcb" === c.cardType ? t("img", {
                    attrs: {
                        src: "assets/icon/card-jcb.png",
                        alt: ""
                    }
                }) : "unionPay" === c.cardType ? t("img", {
                    attrs: {
                        src: "assets/icon/card-union-pay.png",
                        alt: ""
                    }
                }) : c._e()]) : c._e()], 2), t("div", {
                    staticClass: "row"
                }, [t("div", {
                    staticClass: "col-xs-6"
                }, [t("div", {
                    staticClass: "form-group has-icon card-expiration",
                    class: {
                        "has-error": Object.keys(c.formErrors4).length && c.formErrors4.has("card_expiration")
                    }
                }, ["en" === c.app.lang ? [t("input", {
                    ref: "cardExpiration",
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "MM/YY",
                        name: "card_expiration"
                    }
                })] : [t("input", {
                    ref: "cardExpiration",
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "ดด/ปป",
                        name: "card_expiration"
                    }
                })], t("div", {
                    staticClass: "input-icon"
                }, [t("img", {
                    attrs: {
                        src: "assets/icon/card-expiration.svg",
                        alt: ""
                    }
                })])], 2)]), t("div", {
                    staticClass: "col-xs-6"
                }, [t("div", {
                    staticClass: "form-group has-icon card-cvv",
                    class: {
                        "has-error": Object.keys(c.formErrors4).length && c.formErrors4.has("card_cvv")
                    }
                }, [t("input", {
                    ref: "cardCVV",
                    staticClass: "input form-control",
                    attrs: {
                        type: "text",
                        placeholder: "CVV",
                        name: "card_cvv"
                    }
                }), t("div", {
                    staticClass: "input-icon"
                }, [t("img", {
                    attrs: {
                        src: "assets/icon/card-cvv.svg",
                        alt: ""
                    }
                })])])])]), c.isLogedIn ? [t("div", {
                    staticClass: "form-group remember-card"
                }, [t("div", {
                    staticClass: "checkbox"
                }, [t("label", [t("input", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: c.rememberCard,
                        expression: "rememberCard"
                    }],
                    attrs: {
                        type: "checkbox"
                    },
                    domProps: {
                        checked: Array.isArray(c.rememberCard) ? c._i(c.rememberCard, null) > -1 : c.rememberCard
                    },
                    on: {
                        change: function (e) {
                            var t = c.rememberCard,
                                n = e.target,
                                o = !!n.checked;
                            if (Array.isArray(t)) {
                                var a = c._i(t, null);
                                n.checked ? a < 0 && (c.rememberCard = t.concat([null])) : a > -1 && (c.rememberCard = t.slice(0, a).concat(t.slice(a + 1)))
                            } else c.rememberCard = o
                        }
                    }
                }), c._v(" " + c._s("en" === c.app.lang ? "Remember card" : "บันทึกบัตร เพื่อใช้ภายหลัง"))]), t("a", {
                    attrs: {
                        href: "#"
                    },
                    on: {
                        click: function (e) {
                            return e.preventDefault(), c.openPopupRememberInfo(e)
                        }
                    }
                }, [t("img", {
                    attrs: {
                        src: "assets/icon/icon-info.svg",
                        alt: ""
                    }
                })])])])] : c._e()], 2)], 2) : c._e(), t("button", {
                    staticClass: "button btn-block button-blue button-purchase",
                    attrs: {
                        type: "button",
                        disabled: c.disableBuyTicket
                    },
                    on: {
                        click: c.buyTicket
                    }
                }, [c._v(c._s(c.language.pay[c.app.lang]) + " (" + c._s(c.priceFormat(c.totalPrice)) + " " + c._s(c.language.thb[c.app.lang]) + ")")])]), c.paymentForm ? t("div", {
                    class: {
                        "payment-box": "k-plus" === this.payment_method, paynow: "paynow" === c.showtime_data.from
                    },
                    attrs: {
                        id: "ticket-payment"
                    },
                    domProps: {
                        innerHTML: c._s(c.paymentForm)
                    }
                }) : c._e()]], 2) : c._e()])])]), c.payWithSFCard ? t("div", {
                    staticClass: "pay-with-sf-card"
                }, [t("div", {
                    staticClass: "row"
                }, [t("div", {
                    staticClass: "col-sm-10 col-sm-offset-1"
                }, [c.anotherSFCard ? t("div", {
                    staticClass: "box-wrapper"
                }, [t("div", {
                    staticClass: "sf-card-form"
                }, [t("h1", {
                    staticClass: "heading"
                }, [c._v(c._s("en" === c.app.lang ? "Please enter SF Movie Club Card number" : "กรุณาใส่หมายเลขบัตร SF Movie Club"))]), t("div", {
                    staticClass: "form-group",
                    class: {
                        "has-error": Object.keys(c.formErrors3).length && c.formErrors3.has("another_card_no")
                    }
                }, [t("input", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: c.anotherCardNo,
                        expression: "anotherCardNo"
                    }],
                    staticClass: "form-control input",
                    attrs: {
                        type: "text",
                        placeholder: c.anotherCardNoText[c.app.lang],
                        name: "another_card_no",
                        maxlength: "16"
                    },
                    domProps: {
                        value: c.anotherCardNo
                    },
                    on: {
                        input: function (e) {
                            e.target.composing || (c.anotherCardNo = e.target.value)
                        }
                    }
                }), Object.keys(c.formErrors3).length && c.formErrors3.has("another_card_no") ? t("span", {
                    staticClass: "help-block warning-text"
                }, [c._v(c._s(c.formErrors3.first("another_card_no")))]) : c._e()]), t("h1", {
                    staticClass: "heading"
                }, [c._v("กรุณาใส่รหัส PIN")]), t("div", {
                    staticClass: "form-group",
                    class: {
                        "has-error": Object.keys(c.formErrors3).length && c.formErrors3.has("another_card_pin")
                    }
                }, [t("input", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: c.anotherCardPin,
                        expression: "anotherCardPin"
                    }],
                    staticClass: "form-control input",
                    attrs: {
                        type: "password",
                        placeholder: "PIN",
                        name: "another_card_pin",
                        maxlength: "4"
                    },
                    domProps: {
                        value: c.anotherCardPin
                    },
                    on: {
                        input: function (e) {
                            e.target.composing || (c.anotherCardPin = e.target.value)
                        }
                    }
                }), Object.keys(c.formErrors3).length && c.formErrors3.has("another_card_pin") ? t("span", {
                    staticClass: "help-block warning-text"
                }, [c._v(c._s(c.formErrors3.first("another_card_pin")))]) : c._e()]), t("div", {
                    staticClass: "form-action"
                }, [t("button", {
                    staticClass: "button button-blue",
                    attrs: {
                        type: "submit",
                        disabled: Object.keys(c.formErrors3).length && (c.formErrors.has("another_card_no") || "" === c.anotherCardNo || c.formErrors.has("another_card_pin") || "" === c.anotherCardPin)
                    },
                    on: {
                        click: function (e) {
                            c.payWithMovieClubCard()
                        }
                    }
                }, [c._v(c._s(c.language.confirm[c.app.lang]))])])])]) : t("div", {
                    staticClass: "box-wrapper"
                }, [t("div", {
                    staticClass: "pin-form"
                }, [t("h1", {
                    staticClass: "heading"
                }, [c._v("กรุณาใส่รหัส PIN")]), t("div", {
                    staticClass: "form-group",
                    class: {
                        "has-error": Object.keys(c.formErrors2).length && c.formErrors2.has("pin")
                    }
                }, [t("input", {
                    directives: [{
                        name: "model",
                        rawName: "v-model",
                        value: c.pin,
                        expression: "pin"
                    }],
                    staticClass: "form-control input",
                    attrs: {
                        type: "password",
                        placeholder: "PIN",
                        name: "pin",
                        maxlength: "4"
                    },
                    domProps: {
                        value: c.pin
                    },
                    on: {
                        input: function (e) {
                            e.target.composing || (c.pin = e.target.value)
                        }
                    }
                }), Object.keys(c.formErrors2).length && c.formErrors2.has("pin") ? t("span", {
                    staticClass: "help-block warning-text"
                }, [c._v(c._s(c.formErrors2.first("pin")))]) : c._e()]), t("div", {
                    staticClass: "form-action"
                }, [t("button", {
                    staticClass: "button button-blue",
                    attrs: {
                        type: "submit",
                        disabled: Object.keys(c.formErrors2).length && (c.formErrors2.has("pin") || "" === c.pin)
                    },
                    on: {
                        click: function (e) {
                            c.payWithMovieClubCard()
                        }
                    }
                }, [c._v(c._s(c.language.confirm[c.app.lang]))])])]), t("div", {
                    staticClass: "another-card"
                }, [t("div", {
                    staticClass: "form-action"
                }, [t("label", {
                    staticClass: "control-label"
                }, [c._v("Have another SF Movie Club Card?")]), t("button", {
                    staticClass: "button button-blue-trans",
                    on: {
                        click: function (e) {
                            c.anotherSFCard = !0
                        }
                    }
                }, [c._v("Use another SF Movie Club Card")])])])])])])]) : c._e()])])] : c._e()], 2)])
            },
            staticRenderFns: []
        }
    },
    756: function (c, e, t) {
        var n = t(17)(t(941), t(1099), null, null);
        c.exports = n.exports
    },
    776: function (c, e, t) {
        var n, o;
        ! function (t) {
            "use strict";

            function a(c, e) {
                c.className += " " + e
            }

            function i(c, e) {
                for (var t = c.className.split(" "), n = e.split(" "), o = 0; o < n.length; o += 1) {
                    var a = t.indexOf(n[o]);
                    a > -1 && t.splice(a, 1)
                }
                c.className = t.join(" ")
            }

            function M() {
                return "rtl" === t.getComputedStyle(document.body).direction
            }

            function r() {
                return document.documentElement && document.documentElement.scrollTop || document.body.scrollTop
            }

            function s() {
                return document.documentElement && document.documentElement.scrollLeft || document.body.scrollLeft
            }

            function p(c) {
                for (; c.lastChild;) c.removeChild(c.lastChild)
            }

            function l(c) {
                if (null === c) return c;
                var e;
                if (Array.isArray(c)) {
                    e = [];
                    for (var t = 0; t < c.length; t += 1) e.push(l(c[t]));
                    return e
                }
                if (c instanceof Date) return new Date(c.getTime());
                if (c instanceof RegExp) return e = new RegExp(c.source), e.global = c.global, e.ignoreCase = c.ignoreCase, e.multiline = c.multiline, e.lastIndex = c.lastIndex, e;
                if ("object" == typeof c) {
                    e = {};
                    for (var n in c) c.hasOwnProperty(n) && (e[n] = l(c[n]));
                    return e
                }
                return c
            }

            function b(c, e) {
                var t = c.elements.root;
                t.parentNode.removeChild(t), delete c.elements, c.settings = l(c.__settings), c.__init = e, delete c.__internal
            }

            function d(c, e) {
                return function () {
                    if (arguments.length > 0) {
                        for (var t = [], n = 0; n < arguments.length; n += 1) t.push(arguments[n]);
                        return t.push(c), e.apply(c, t)
                    }
                    return e.apply(c, [null, c])
                }
            }

            function z(c, e) {
                return {
                    index: c,
                    button: e,
                    cancel: !1
                }
            }

            function A(c, e) {
                if ("function" == typeof e.get(c)) return e.get(c).call(e)
            }

            function u() {
                function c(c, e) {
                    for (var t in e) e.hasOwnProperty(t) && (c[t] = e[t]);
                    return c
                }

                function e(c) {
                    var e = n[c].dialog;
                    return e && "function" == typeof e.__init && e.__init(e), e
                }

                function t(e, t, o, a) {
                    var i = {
                        dialog: null,
                        factory: t
                    };
                    return void 0 !== a && (i.factory = function () {
                        return c(new n[a].factory, new t)
                    }), o || (i.dialog = c(new i.factory, N)), n[e] = i
                }
                var n = {};
                return {
                    defaults: m,
                    dialog: function (n, o, a, i) {
                        if ("function" != typeof o) return e(n);
                        if (this.hasOwnProperty(n)) throw new Error("alertify.dialog: name already exists");
                        var M = t(n, o, a, i);
                        this[n] = a ? function () {
                            if (0 === arguments.length) return M.dialog;
                            var e = c(new M.factory, N);
                            return e && "function" == typeof e.__init && e.__init(e), e.main.apply(e, arguments), e.show.apply(e)
                        } : function () {
                            if (M.dialog && "function" == typeof M.dialog.__init && M.dialog.__init(M.dialog), 0 === arguments.length) return M.dialog;
                            var c = M.dialog;
                            return c.main.apply(M.dialog, arguments), c.show.apply(M.dialog)
                        }
                    },
                    closeAll: function (c) {
                        for (var e = L.slice(0), t = 0; t < e.length; t += 1) {
                            var n = e[t];
                            void 0 !== c && c === n || n.close()
                        }
                    },
                    setting: function (c, t, n) {
                        if ("notifier" === c) return W.setting(t, n);
                        var o = e(c);
                        return o ? o.setting(t, n) : void 0
                    },
                    set: function (c, e, t) {
                        return this.setting(c, e, t)
                    },
                    get: function (c, e) {
                        return this.setting(c, e)
                    },
                    notify: function (c, e, t, n) {
                        return W.create(e, n).push(c, t)
                    },
                    message: function (c, e, t) {
                        return W.create(null, t).push(c, e)
                    },
                    success: function (c, e, t) {
                        return W.create("success", t).push(c, e)
                    },
                    error: function (c, e, t) {
                        return W.create("error", t).push(c, e)
                    },
                    warning: function (c, e, t) {
                        return W.create("warning", t).push(c, e)
                    },
                    dismissAll: function () {
                        W.dismissAll()
                    }
                }
            }
            var f = {
                    ENTER: 13,
                    ESC: 27,
                    F1: 112,
                    F12: 123,
                    LEFT: 37,
                    RIGHT: 39
                },
                m = {
                    autoReset: !0,
                    basic: !1,
                    closable: !0,
                    closableByDimmer: !0,
                    frameless: !1,
                    maintainFocus: !0,
                    maximizable: !0,
                    modal: !0,
                    movable: !0,
                    moveBounded: !1,
                    overflow: !0,
                    padding: !0,
                    pinnable: !0,
                    pinned: !0,
                    preventBodyShift: !1,
                    resizable: !0,
                    startMaximized: !1,
                    transition: "pulse",
                    notifier: {
                        delay: 5,
                        position: "bottom-right",
                        closeButton: !1
                    },
                    glossary: {
                        title: "AlertifyJS",
                        ok: "OK",
                        cancel: "Cancel",
                        acccpt: "Accept",
                        deny: "Deny",
                        confirm: "Confirm",
                        decline: "Decline",
                        close: "Close",
                        maximize: "Maximize",
                        restore: "Restore"
                    },
                    theme: {
                        input: "ajs-input",
                        ok: "ajs-ok",
                        cancel: "ajs-cancel"
                    }
                },
                L = [],
                O = function () {
                    return document.addEventListener ? function (c, e, t, n) {
                        c.addEventListener(e, t, !0 === n)
                    } : document.attachEvent ? function (c, e, t) {
                        c.attachEvent("on" + e, t)
                    } : void 0
                }(),
                q = function () {
                    return document.removeEventListener ? function (c, e, t, n) {
                        c.removeEventListener(e, t, !0 === n)
                    } : document.detachEvent ? function (c, e, t) {
                        c.detachEvent("on" + e, t)
                    } : void 0
                }(),
                h = function () {
                    var c, e, t = !1,
                        n = {
                            animation: "animationend",
                            OAnimation: "oAnimationEnd oanimationend",
                            msAnimation: "MSAnimationEnd",
                            MozAnimation: "animationend",
                            WebkitAnimation: "webkitAnimationEnd"
                        };
                    for (c in n)
                        if (void 0 !== document.documentElement.style[c]) {
                            e = n[c], t = !0;
                            break
                        } return {
                        type: e,
                        supported: t
                    }
                }(),
                N = function () {
                    function c(c) {
                        if (!c.__internal) {
                            delete c.__init, c.__settings || (c.__settings = l(c.settings));
                            var e;
                            "function" == typeof c.setup ? (e = c.setup(), e.options = e.options || {}, e.focus = e.focus || {}) : e = {
                                buttons: [],
                                focus: {
                                    element: null,
                                    select: !1
                                },
                                options: {}
                            }, "object" != typeof c.hooks && (c.hooks = {});
                            var t = [];
                            if (Array.isArray(e.buttons))
                                for (var n = 0; n < e.buttons.length; n += 1) {
                                    var o = e.buttons[n],
                                        i = {};
                                    for (var M in o) o.hasOwnProperty(M) && (i[M] = o[M]);
                                    t.push(i)
                                }
                            var r = c.__internal = {
                                    isOpen: !1,
                                    activeElement: document.body,
                                    timerIn: void 0,
                                    timerOut: void 0,
                                    buttons: t,
                                    focus: e.focus,
                                    options: {
                                        title: void 0,
                                        modal: void 0,
                                        basic: void 0,
                                        frameless: void 0,
                                        pinned: void 0,
                                        movable: void 0,
                                        moveBounded: void 0,
                                        resizable: void 0,
                                        autoReset: void 0,
                                        closable: void 0,
                                        closableByDimmer: void 0,
                                        maximizable: void 0,
                                        startMaximized: void 0,
                                        pinnable: void 0,
                                        transition: void 0,
                                        padding: void 0,
                                        overflow: void 0,
                                        onshow: void 0,
                                        onclosing: void 0,
                                        onclose: void 0,
                                        onfocus: void 0,
                                        onmove: void 0,
                                        onmoved: void 0,
                                        onresize: void 0,
                                        onresized: void 0,
                                        onmaximize: void 0,
                                        onmaximized: void 0,
                                        onrestore: void 0,
                                        onrestored: void 0
                                    },
                                    resetHandler: void 0,
                                    beginMoveHandler: void 0,
                                    beginResizeHandler: void 0,
                                    bringToFrontHandler: void 0,
                                    modalClickHandler: void 0,
                                    buttonsClickHandler: void 0,
                                    commandsClickHandler: void 0,
                                    transitionInHandler: void 0,
                                    transitionOutHandler: void 0,
                                    destroy: void 0
                                },
                                s = {};
                            s.root = document.createElement("div"), s.root.className = Cc.base + " " + Cc.hidden + " ", s.root.innerHTML = Bc.dimmer + Bc.modal, s.dimmer = s.root.firstChild, s.modal = s.root.lastChild, s.modal.innerHTML = Bc.dialog, s.dialog = s.modal.firstChild, s.dialog.innerHTML = Bc.reset + Bc.commands + Bc.header + Bc.body + Bc.footer + Bc.resizeHandle + Bc.reset, s.reset = [], s.reset.push(s.dialog.firstChild), s.reset.push(s.dialog.lastChild), s.commands = {}, s.commands.container = s.reset[0].nextSibling, s.commands.pin = s.commands.container.firstChild, s.commands.maximize = s.commands.pin.nextSibling, s.commands.close = s.commands.maximize.nextSibling, s.header = s.commands.container.nextSibling, s.body = s.header.nextSibling, s.body.innerHTML = Bc.content, s.content = s.body.firstChild, s.footer = s.body.nextSibling, s.footer.innerHTML = Bc.buttons.auxiliary + Bc.buttons.primary, s.resizeHandle = s.footer.nextSibling, s.buttons = {}, s.buttons.auxiliary = s.footer.firstChild, s.buttons.primary = s.buttons.auxiliary.nextSibling, s.buttons.primary.innerHTML = Bc.button, s.buttonTemplate = s.buttons.primary.firstChild, s.buttons.primary.removeChild(s.buttonTemplate);
                            for (var p = 0; p < c.__internal.buttons.length; p += 1) {
                                var b = c.__internal.buttons[p];
                                Wc.indexOf(b.key) < 0 && Wc.push(b.key), b.element = s.buttonTemplate.cloneNode(), b.element.innerHTML = b.text, "string" == typeof b.className && "" !== b.className && a(b.element, b.className);
                                for (var z in b.attrs) "className" !== z && b.attrs.hasOwnProperty(z) && b.element.setAttribute(z, b.attrs[z]);
                                "auxiliary" === b.scope ? s.buttons.auxiliary.appendChild(b.element) : s.buttons.primary.appendChild(b.element)
                            }
                            c.elements = s, r.resetHandler = d(c, Q), r.beginMoveHandler = d(c, cc), r.beginResizeHandler = d(c, ic), r.bringToFrontHandler = d(c, T), r.modalClickHandler = d(c, F), r.buttonsClickHandler = d(c, U), r.commandsClickHandler = d(c, _), r.transitionInHandler = d(c, J), r.transitionOutHandler = d(c, $);
                            for (var A in r.options) void 0 !== e.options[A] ? c.set(A, e.options[A]) : X.defaults.hasOwnProperty(A) ? c.set(A, X.defaults[A]) : "title" === A && c.set(A, X.defaults.glossary[A]);
                            "function" == typeof c.build && c.build()
                        }
                        document.body.appendChild(c.elements.root)
                    }

                    function e() {
                        hc = s(), Nc = r()
                    }

                    function n() {
                        t.scrollTo(hc, Nc)
                    }

                    function o() {
                        for (var c = 0, e = 0; e < L.length; e += 1) {
                            var t = L[e];
                            (t.isModal() || t.isMaximized()) && (c += 1)
                        }
                        0 === c && document.body.className.indexOf(Cc.noOverflow) >= 0 ? (i(document.body, Cc.noOverflow), u(!1)) : c > 0 && document.body.className.indexOf(Cc.noOverflow) < 0 && (u(!0), a(document.body, Cc.noOverflow))
                    }

                    function u(c) {
                        X.defaults.preventBodyShift && document.documentElement.scrollHeight > document.documentElement.clientHeight && (c ? (_c = Nc, vc = t.getComputedStyle(document.body).top, a(document.body, Cc.fixed), document.body.style.top = -Nc + "px") : (Nc = _c, document.body.style.top = vc, i(document.body, Cc.fixed), n()))
                    }

                    function m(c, e, t) {
                        "string" == typeof t && i(c.elements.root, Cc.prefix + t), a(c.elements.root, Cc.prefix + e), Xc = c.elements.root.offsetWidth
                    }

                    function N(c) {
                        c.get("modal") ? (i(c.elements.root, Cc.modeless), c.isOpen() && (Ac(c), P(c), o())) : (a(c.elements.root, Cc.modeless), c.isOpen() && (zc(c), P(c), o()))
                    }

                    function W(c) {
                        c.get("basic") ? a(c.elements.root, Cc.basic) : i(c.elements.root, Cc.basic)
                    }

                    function g(c) {
                        c.get("frameless") ? a(c.elements.root, Cc.frameless) : i(c.elements.root, Cc.frameless)
                    }

                    function T(c, e) {
                        for (var t = L.indexOf(e), n = t + 1; n < L.length; n += 1)
                            if (L[n].isModal()) return;
                        return document.body.lastChild !== e.elements.root && (document.body.appendChild(e.elements.root), L.splice(L.indexOf(e), 1), L.push(e), G(e)), !1
                    }

                    function B(c, e, t, n) {
                        switch (e) {
                            case "title":
                                c.setHeader(n);
                                break;
                            case "modal":
                                N(c);
                                break;
                            case "basic":
                                W(c);
                                break;
                            case "frameless":
                                g(c);
                                break;
                            case "pinned":
                                D(c);
                                break;
                            case "closable":
                                I(c);
                                break;
                            case "maximizable":
                                H(c);
                                break;
                            case "pinnable":
                                R(c);
                                break;
                            case "movable":
                                oc(c);
                                break;
                            case "resizable":
                                pc(c);
                                break;
                            case "padding":
                                n ? i(c.elements.root, Cc.noPadding) : c.elements.root.className.indexOf(Cc.noPadding) < 0 && a(c.elements.root, Cc.noPadding);
                                break;
                            case "overflow":
                                n ? i(c.elements.root, Cc.noOverflow) : c.elements.root.className.indexOf(Cc.noOverflow) < 0 && a(c.elements.root, Cc.noOverflow);
                                break;
                            case "transition":
                                m(c, n, t)
                        }
                        "function" == typeof c.hooks.onupdate && c.hooks.onupdate.call(c, e, t, n)
                    }

                    function C(c, e, t, n, o) {
                        var a = {
                            op: void 0,
                            items: []
                        };
                        if (void 0 === o && "string" == typeof n) a.op = "get", e.hasOwnProperty(n) ? (a.found = !0, a.value = e[n]) : (a.found = !1, a.value = void 0);
                        else {
                            var i;
                            if (a.op = "set", "object" == typeof n) {
                                var M = n;
                                for (var r in M) e.hasOwnProperty(r) ? (e[r] !== M[r] && (i = e[r], e[r] = M[r], t.call(c, r, i, M[r])), a.items.push({
                                    key: r,
                                    value: M[r],
                                    found: !0
                                })) : a.items.push({
                                    key: r,
                                    value: M[r],
                                    found: !1
                                })
                            } else {
                                if ("string" != typeof n) throw new Error("args must be a string or object");
                                e.hasOwnProperty(n) ? (e[n] !== o && (i = e[n], e[n] = o, t.call(c, n, i, o)), a.items.push({
                                    key: n,
                                    value: o,
                                    found: !0
                                })) : a.items.push({
                                    key: n,
                                    value: o,
                                    found: !1
                                })
                            }
                        }
                        return a
                    }

                    function v(c) {
                        var e;
                        j(c, function (c) {
                            return e = !0 === c.invokeOnClose
                        }), !e && c.isOpen() && c.close()
                    }

                    function _(c, e) {
                        switch (c.srcElement || c.target) {
                            case e.elements.commands.pin:
                                e.isPinned() ? E(e) : y(e);
                                break;
                            case e.elements.commands.maximize:
                                e.isMaximized() ? k(e) : S(e);
                                break;
                            case e.elements.commands.close:
                                v(e)
                        }
                        return !1
                    }

                    function y(c) {
                        c.set("pinned", !0)
                    }

                    function E(c) {
                        c.set("pinned", !1)
                    }

                    function S(c) {
                        A("onmaximize", c), a(c.elements.root, Cc.maximized), c.isOpen() && o(), A("onmaximized", c)
                    }

                    function k(c) {
                        A("onrestore", c), i(c.elements.root, Cc.maximized), c.isOpen() && o(), A("onrestored", c)
                    }

                    function R(c) {
                        c.get("pinnable") ? a(c.elements.root, Cc.pinnable) : i(c.elements.root, Cc.pinnable)
                    }

                    function w(c) {
                        var e = s();
                        c.elements.modal.style.marginTop = r() + "px", c.elements.modal.style.marginLeft = e + "px", c.elements.modal.style.marginRight = -e + "px"
                    }

                    function x(c) {
                        var e = parseInt(c.elements.modal.style.marginTop, 10),
                            t = parseInt(c.elements.modal.style.marginLeft, 10);
                        if (c.elements.modal.style.marginTop = "", c.elements.modal.style.marginLeft = "", c.elements.modal.style.marginRight = "", c.isOpen()) {
                            var n = 0,
                                o = 0;
                            "" !== c.elements.dialog.style.top && (n = parseInt(c.elements.dialog.style.top, 10)), c.elements.dialog.style.top = n + (e - r()) + "px", "" !== c.elements.dialog.style.left && (o = parseInt(c.elements.dialog.style.left, 10)), c.elements.dialog.style.left = o + (t - s()) + "px"
                        }
                    }

                    function P(c) {
                        c.get("modal") || c.get("pinned") ? x(c) : w(c)
                    }

                    function D(c) {
                        c.get("pinned") ? (i(c.elements.root, Cc.unpinned), c.isOpen() && x(c)) : (a(c.elements.root, Cc.unpinned), c.isOpen() && !c.isModal() && w(c))
                    }

                    function H(c) {
                        c.get("maximizable") ? a(c.elements.root, Cc.maximizable) : i(c.elements.root, Cc.maximizable)
                    }

                    function I(c) {
                        c.get("closable") ? (a(c.elements.root, Cc.closable), Oc(c)) : (i(c.elements.root, Cc.closable), qc(c))
                    }

                    function F(c, e) {
                        var t = c.srcElement || c.target;
                        return yc || t !== e.elements.modal || !0 !== e.get("closableByDimmer") || v(e), yc = !1, !1
                    }

                    function j(c, e) {
                        for (var t = 0; t < c.__internal.buttons.length; t += 1) {
                            var n = c.__internal.buttons[t];
                            if (!n.element.disabled && e(n)) {
                                var o = z(t, n);
                                "function" == typeof c.callback && c.callback.apply(c, [o]), !1 === o.cancel && c.close();
                                break
                            }
                        }
                    }

                    function U(c, e) {
                        var t = c.srcElement || c.target;
                        j(e, function (c) {
                            return c.element === t && (Ec = !0)
                        })
                    }

                    function V(c) {
                        if (Ec) return void(Ec = !1);
                        var e = L[L.length - 1],
                            t = c.keyCode;
                        return 0 === e.__internal.buttons.length && t === f.ESC && !0 === e.get("closable") ? (v(e), !1) : Wc.indexOf(t) > -1 ? (j(e, function (c) {
                            return c.key === t
                        }), !1) : void 0
                    }

                    function K(c) {
                        var e = L[L.length - 1],
                            t = c.keyCode;
                        if (t === f.LEFT || t === f.RIGHT) {
                            for (var n = e.__internal.buttons, o = 0; o < n.length; o += 1)
                                if (document.activeElement === n[o].element) switch (t) {
                                    case f.LEFT:
                                        return void n[(o || n.length) - 1].element.focus();
                                    case f.RIGHT:
                                        return void n[(o + 1) % n.length].element.focus()
                                }
                        } else if (t < f.F12 + 1 && t > f.F1 - 1 && Wc.indexOf(t) > -1) return c.preventDefault(), c.stopPropagation(), j(e, function (c) {
                            return c.key === t
                        }), !1
                    }

                    function G(c, e) {
                        if (e) e.focus();
                        else {
                            var t = c.__internal.focus,
                                n = t.element;
                            switch (typeof t.element) {
                                case "number":
                                    c.__internal.buttons.length > t.element && (n = !0 === c.get("basic") ? c.elements.reset[0] : c.__internal.buttons[t.element].element);
                                    break;
                                case "string":
                                    n = c.elements.body.querySelector(t.element);
                                    break;
                                case "function":
                                    n = t.element.call(c)
                            }
                            void 0 !== n && null !== n || 0 !== c.__internal.buttons.length || (n = c.elements.reset[0]), n && n.focus && (n.focus(), t.select && n.select && n.select())
                        }
                    }

                    function Q(c, e) {
                        if (!e)
                            for (var t = L.length - 1; t > -1; t -= 1)
                                if (L[t].isModal()) {
                                    e = L[t];
                                    break
                                } if (e && e.isModal()) {
                            var n, o = c.srcElement || c.target,
                                a = o === e.elements.reset[1] || 0 === e.__internal.buttons.length && o === document.body;
                            a && (e.get("maximizable") ? n = e.elements.commands.maximize : e.get("closable") && (n = e.elements.commands.close)), void 0 === n && ("number" == typeof e.__internal.focus.element ? o === e.elements.reset[0] ? n = e.elements.buttons.auxiliary.firstChild || e.elements.buttons.primary.firstChild : a && (n = e.elements.reset[0]) : o === e.elements.reset[0] && (n = e.elements.buttons.primary.lastChild || e.elements.buttons.auxiliary.lastChild)), G(e, n)
                        }
                    }

                    function J(c, e) {
                        clearTimeout(e.__internal.timerIn), G(e), n(), Ec = !1, A("onfocus", e), q(e.elements.dialog, h.type, e.__internal.transitionInHandler), i(e.elements.root, Cc.animationIn)
                    }

                    function $(c, e) {
                        clearTimeout(e.__internal.timerOut), q(e.elements.dialog, h.type, e.__internal.transitionOutHandler), nc(e), sc(e), e.isMaximized() && !e.get("startMaximized") && k(e), X.defaults.maintainFocus && e.__internal.activeElement && (e.__internal.activeElement.focus(), e.__internal.activeElement = null), "function" == typeof e.__internal.destroy && e.__internal.destroy.apply(e)
                    }

                    function Y(c, e) {
                        var t = c[wc] - kc,
                            n = c[xc] - Rc;
                        Dc && (n -= document.body.scrollTop), e.style.left = t + "px", e.style.top = n + "px"
                    }

                    function Z(c, e) {
                        var t = c[wc] - kc,
                            n = c[xc] - Rc;
                        Dc && (n -= document.body.scrollTop), e.style.left = Math.min(Pc.maxLeft, Math.max(Pc.minLeft, t)) + "px", e.style.top = Dc ? Math.min(Pc.maxTop, Math.max(Pc.minTop, n)) + "px" : Math.max(Pc.minTop, n) + "px"
                    }

                    function cc(c, e) {
                        if (null === Ic && !e.isMaximized() && e.get("movable")) {
                            var t, n = 0,
                                o = 0;
                            if ("touchstart" === c.type ? (c.preventDefault(), t = c.targetTouches[0], wc = "clientX", xc = "clientY") : 0 === c.button && (t = c), t) {
                                var i = e.elements.dialog;
                                if (a(i, Cc.capture), i.style.left && (n = parseInt(i.style.left, 10)), i.style.top && (o = parseInt(i.style.top, 10)), kc = t[wc] - n, Rc = t[xc] - o, e.isModal() ? Rc += e.elements.modal.scrollTop : e.isPinned() && (Rc -= document.body.scrollTop), e.get("moveBounded")) {
                                    var M = i,
                                        r = -n,
                                        s = -o;
                                    do {
                                        r += M.offsetLeft, s += M.offsetTop
                                    } while (M = M.offsetParent);
                                    Pc = {
                                        maxLeft: r,
                                        minLeft: -r,
                                        maxTop: document.documentElement.clientHeight - i.clientHeight - s,
                                        minTop: -s
                                    }, Hc = Z
                                } else Pc = null, Hc = Y;
                                return A("onmove", e), Dc = !e.isModal() && e.isPinned(), Sc = e, Hc(t, i), a(document.body, Cc.noSelection), !1
                            }
                        }
                    }

                    function ec(c) {
                        if (Sc) {
                            var e;
                            "touchmove" === c.type ? (c.preventDefault(), e = c.targetTouches[0]) : 0 === c.button && (e = c), e && Hc(e, Sc.elements.dialog)
                        }
                    }

                    function tc() {
                        if (Sc) {
                            var c = Sc;
                            Sc = Pc = null, i(document.body, Cc.noSelection), i(c.elements.dialog, Cc.capture), A("onmoved", c)
                        }
                    }

                    function nc(c) {
                        Sc = null;
                        var e = c.elements.dialog;
                        e.style.left = e.style.top = ""
                    }

                    function oc(c) {
                        c.get("movable") ? (a(c.elements.root, Cc.movable), c.isOpen() && uc(c)) : (nc(c), i(c.elements.root, Cc.movable), c.isOpen() && fc(c))
                    }

                    function ac(c, e, t) {
                        var n = e,
                            o = 0,
                            a = 0;
                        do {
                            o += n.offsetLeft, a += n.offsetTop
                        } while (n = n.offsetParent);
                        var i, r;
                        !0 === t ? (i = c.pageX, r = c.pageY) : (i = c.clientX, r = c.clientY);
                        var s = M();
                        if (s && (i = document.body.offsetWidth - i, isNaN(Fc) || (o = document.body.offsetWidth - o - e.offsetWidth)), e.style.height = r - a + Vc + "px", e.style.width = i - o + Vc + "px", !isNaN(Fc)) {
                            var p = .5 * Math.abs(e.offsetWidth - jc);
                            s && (p *= -1), e.offsetWidth > jc ? e.style.left = Fc + p + "px" : e.offsetWidth >= Uc && (e.style.left = Fc - p + "px")
                        }
                    }

                    function ic(c, e) {
                        if (!e.isMaximized()) {
                            var t;
                            if ("touchstart" === c.type ? (c.preventDefault(), t = c.targetTouches[0]) : 0 === c.button && (t = c), t) {
                                A("onresize", e), Ic = e, Vc = e.elements.resizeHandle.offsetHeight / 2;
                                var n = e.elements.dialog;
                                return a(n, Cc.capture), Fc = parseInt(n.style.left, 10), n.style.height = n.offsetHeight + "px", n.style.minHeight = e.elements.header.offsetHeight + e.elements.footer.offsetHeight + "px", n.style.width = (jc = n.offsetWidth) + "px", "none" !== n.style.maxWidth && (n.style.minWidth = (Uc = n.offsetWidth) + "px"), n.style.maxWidth = "none", a(document.body, Cc.noSelection), !1
                            }
                        }
                    }

                    function Mc(c) {
                        if (Ic) {
                            var e;
                            "touchmove" === c.type ? (c.preventDefault(), e = c.targetTouches[0]) : 0 === c.button && (e = c), e && ac(e, Ic.elements.dialog, !Ic.get("modal") && !Ic.get("pinned"))
                        }
                    }

                    function rc() {
                        if (Ic) {
                            var c = Ic;
                            Ic = null, i(document.body, Cc.noSelection), i(c.elements.dialog, Cc.capture), yc = !0, A("onresized", c)
                        }
                    }

                    function sc(c) {
                        Ic = null;
                        var e = c.elements.dialog;
                        "none" === e.style.maxWidth && (e.style.maxWidth = e.style.minWidth = e.style.width = e.style.height = e.style.minHeight = e.style.left = "", Fc = Number.Nan, jc = Uc = Vc = 0)
                    }

                    function pc(c) {
                        c.get("resizable") ? (a(c.elements.root, Cc.resizable), c.isOpen() && mc(c)) : (sc(c), i(c.elements.root, Cc.resizable), c.isOpen() && Lc(c))
                    }

                    function lc() {
                        for (var c = 0; c < L.length; c += 1) {
                            var e = L[c];
                            e.get("autoReset") && (nc(e), sc(e))
                        }
                    }

                    function bc(c) {
                        1 === L.length && (O(t, "resize", lc), O(document.body, "keyup", V), O(document.body, "keydown", K), O(document.body, "focus", Q), O(document.documentElement, "mousemove", ec), O(document.documentElement, "touchmove", ec), O(document.documentElement, "mouseup", tc), O(document.documentElement, "touchend", tc), O(document.documentElement, "mousemove", Mc), O(document.documentElement, "touchmove", Mc), O(document.documentElement, "mouseup", rc), O(document.documentElement, "touchend", rc)), O(c.elements.commands.container, "click", c.__internal.commandsClickHandler), O(c.elements.footer, "click", c.__internal.buttonsClickHandler), O(c.elements.reset[0], "focus", c.__internal.resetHandler), O(c.elements.reset[1], "focus", c.__internal.resetHandler), Ec = !0, O(c.elements.dialog, h.type, c.__internal.transitionInHandler), c.get("modal") || zc(c), c.get("resizable") && mc(c), c.get("movable") && uc(c)
                    }

                    function dc(c) {
                        1 === L.length && (q(t, "resize", lc), q(document.body, "keyup", V), q(document.body, "keydown", K), q(document.body, "focus", Q), q(document.documentElement, "mousemove", ec), q(document.documentElement, "mouseup", tc), q(document.documentElement, "mousemove", Mc), q(document.documentElement, "mouseup", rc)), q(c.elements.commands.container, "click", c.__internal.commandsClickHandler), q(c.elements.footer, "click", c.__internal.buttonsClickHandler), q(c.elements.reset[0], "focus", c.__internal.resetHandler), q(c.elements.reset[1], "focus", c.__internal.resetHandler), O(c.elements.dialog, h.type, c.__internal.transitionOutHandler), c.get("modal") || Ac(c), c.get("movable") && fc(c), c.get("resizable") && Lc(c)
                    }

                    function zc(c) {
                        O(c.elements.dialog, "focus", c.__internal.bringToFrontHandler, !0)
                    }

                    function Ac(c) {
                        q(c.elements.dialog, "focus", c.__internal.bringToFrontHandler, !0)
                    }

                    function uc(c) {
                        O(c.elements.header, "mousedown", c.__internal.beginMoveHandler), O(c.elements.header, "touchstart", c.__internal.beginMoveHandler)
                    }

                    function fc(c) {
                        q(c.elements.header, "mousedown", c.__internal.beginMoveHandler), q(c.elements.header, "touchstart", c.__internal.beginMoveHandler)
                    }

                    function mc(c) {
                        O(c.elements.resizeHandle, "mousedown", c.__internal.beginResizeHandler), O(c.elements.resizeHandle, "touchstart", c.__internal.beginResizeHandler)
                    }

                    function Lc(c) {
                        q(c.elements.resizeHandle, "mousedown", c.__internal.beginResizeHandler), q(c.elements.resizeHandle, "touchstart", c.__internal.beginResizeHandler)
                    }

                    function Oc(c) {
                        O(c.elements.modal, "click", c.__internal.modalClickHandler)
                    }

                    function qc(c) {
                        q(c.elements.modal, "click", c.__internal.modalClickHandler)
                    }
                    var hc, Nc, Wc = [],
                        Xc = null,
                        gc = !1,
                        Tc = t.navigator.userAgent.indexOf("Safari") > -1 && t.navigator.userAgent.indexOf("Chrome") < 0,
                        Bc = {
                            dimmer: '<div class="ajs-dimmer"></div>',
                            modal: '<div class="ajs-modal" tabindex="0"></div>',
                            dialog: '<div class="ajs-dialog" tabindex="0"></div>',
                            reset: '<button class="ajs-reset"></button>',
                            commands: '<div class="ajs-commands"><button class="ajs-pin"></button><button class="ajs-maximize"></button><button class="ajs-close"></button></div>',
                            header: '<div class="ajs-header"></div>',
                            body: '<div class="ajs-body"></div>',
                            content: '<div class="ajs-content"></div>',
                            footer: '<div class="ajs-footer"></div>',
                            buttons: {
                                primary: '<div class="ajs-primary ajs-buttons"></div>',
                                auxiliary: '<div class="ajs-auxiliary ajs-buttons"></div>'
                            },
                            button: '<button class="ajs-button"></button>',
                            resizeHandle: '<div class="ajs-handle"></div>'
                        },
                        Cc = {
                            animationIn: "ajs-in",
                            animationOut: "ajs-out",
                            base: "alertify",
                            basic: "ajs-basic",
                            capture: "ajs-capture",
                            closable: "ajs-closable",
                            fixed: "ajs-fixed",
                            frameless: "ajs-frameless",
                            hidden: "ajs-hidden",
                            maximize: "ajs-maximize",
                            maximized: "ajs-maximized",
                            maximizable: "ajs-maximizable",
                            modeless: "ajs-modeless",
                            movable: "ajs-movable",
                            noSelection: "ajs-no-selection",
                            noOverflow: "ajs-no-overflow",
                            noPadding: "ajs-no-padding",
                            pin: "ajs-pin",
                            pinnable: "ajs-pinnable",
                            prefix: "ajs-",
                            resizable: "ajs-resizable",
                            restore: "ajs-restore",
                            shake: "ajs-shake",
                            unpinned: "ajs-unpinned"
                        },
                        vc = "",
                        _c = 0,
                        yc = !1,
                        Ec = !1,
                        Sc = null,
                        kc = 0,
                        Rc = 0,
                        wc = "pageX",
                        xc = "pageY",
                        Pc = null,
                        Dc = !1,
                        Hc = null,
                        Ic = null,
                        Fc = Number.Nan,
                        jc = 0,
                        Uc = 0,
                        Vc = 0;
                    return {
                        __init: c,
                        isOpen: function () {
                            return this.__internal.isOpen
                        },
                        isModal: function () {
                            return this.elements.root.className.indexOf(Cc.modeless) < 0
                        },
                        isMaximized: function () {
                            return this.elements.root.className.indexOf(Cc.maximized) > -1
                        },
                        isPinned: function () {
                            return this.elements.root.className.indexOf(Cc.unpinned) < 0
                        },
                        maximize: function () {
                            return this.isMaximized() || S(this), this
                        },
                        restore: function () {
                            return this.isMaximized() && k(this), this
                        },
                        pin: function () {
                            return this.isPinned() || y(this), this
                        },
                        unpin: function () {
                            return this.isPinned() && E(this), this
                        },
                        bringToFront: function () {
                            return T(null, this), this
                        },
                        moveTo: function (c, e) {
                            if (!isNaN(c) && !isNaN(e)) {
                                A("onmove", this);
                                var t = this.elements.dialog,
                                    n = t,
                                    o = 0,
                                    a = 0;
                                t.style.left && (o -= parseInt(t.style.left, 10)), t.style.top && (a -= parseInt(t.style.top, 10));
                                do {
                                    o += n.offsetLeft, a += n.offsetTop
                                } while (n = n.offsetParent);
                                var i = c - o,
                                    r = e - a;
                                M() && (i *= -1), t.style.left = i + "px", t.style.top = r + "px", A("onmoved", this)
                            }
                            return this
                        },
                        resizeTo: function (c, e) {
                            var t = parseFloat(c),
                                n = parseFloat(e),
                                o = /(\d*\.\d+|\d+)%/;
                            if (!isNaN(t) && !isNaN(n) && !0 === this.get("resizable")) {
                                A("onresize", this), ("" + c).match(o) && (t = t / 100 * document.documentElement.clientWidth), ("" + e).match(o) && (n = n / 100 * document.documentElement.clientHeight);
                                var a = this.elements.dialog;
                                "none" !== a.style.maxWidth && (a.style.minWidth = (Uc = a.offsetWidth) + "px"), a.style.maxWidth = "none", a.style.minHeight = this.elements.header.offsetHeight + this.elements.footer.offsetHeight + "px", a.style.width = t + "px", a.style.height = n + "px", A("onresized", this)
                            }
                            return this
                        },
                        setting: function (c, e) {
                            var t = this,
                                n = C(this, this.__internal.options, function (c, e, n) {
                                    B(t, c, e, n)
                                }, c, e);
                            if ("get" === n.op) return n.found ? n.value : void 0 !== this.settings ? C(this, this.settings, this.settingUpdated || function () {}, c, e).value : void 0;
                            if ("set" === n.op) {
                                if (n.items.length > 0)
                                    for (var o = this.settingUpdated || function () {}, a = 0; a < n.items.length; a += 1) {
                                        var i = n.items[a];
                                        i.found || void 0 === this.settings || C(this, this.settings, o, i.key, i.value)
                                    }
                                return this
                            }
                        },
                        set: function (c, e) {
                            return this.setting(c, e), this
                        },
                        get: function (c) {
                            return this.setting(c)
                        },
                        setHeader: function (c) {
                            return "string" == typeof c ? (p(this.elements.header), this.elements.header.innerHTML = c) : c instanceof t.HTMLElement && this.elements.header.firstChild !== c && (p(this.elements.header), this.elements.header.appendChild(c)), this
                        },
                        setContent: function (c) {
                            return "string" == typeof c ? (p(this.elements.content), this.elements.content.innerHTML = c) : c instanceof t.HTMLElement && this.elements.content.firstChild !== c && (p(this.elements.content), this.elements.content.appendChild(c)), this
                        },
                        showModal: function (c) {
                            return this.show(!0, c)
                        },
                        show: function (t, n) {
                            if (c(this), this.__internal.isOpen) {
                                nc(this), sc(this), a(this.elements.dialog, Cc.shake);
                                var M = this;
                                setTimeout(function () {
                                    i(M.elements.dialog, Cc.shake)
                                }, 200)
                            } else {
                                if (this.__internal.isOpen = !0, L.push(this), X.defaults.maintainFocus && (this.__internal.activeElement = document.activeElement), document.body.hasAttribute("tabindex") || document.body.setAttribute("tabindex", gc = "0"), "function" == typeof this.prepare && this.prepare(), bc(this), void 0 !== t && this.set("modal", t), e(), o(), "string" == typeof n && "" !== n && (this.__internal.className = n, a(this.elements.root, n)), this.get("startMaximized") ? this.maximize() : this.isMaximized() && k(this), P(this), i(this.elements.root, Cc.animationOut), a(this.elements.root, Cc.animationIn), clearTimeout(this.__internal.timerIn), this.__internal.timerIn = setTimeout(this.__internal.transitionInHandler, h.supported ? 1e3 : 100), Tc) {
                                    var r = this.elements.root;
                                    r.style.display = "none", setTimeout(function () {
                                        r.style.display = "block"
                                    }, 0)
                                }
                                Xc = this.elements.root.offsetWidth, i(this.elements.root, Cc.hidden), "function" == typeof this.hooks.onshow && this.hooks.onshow.call(this), A("onshow", this)
                            }
                            return this
                        },
                        close: function () {
                            return this.__internal.isOpen && !1 !== A("onclosing", this) && (dc(this), i(this.elements.root, Cc.animationIn), a(this.elements.root, Cc.animationOut), clearTimeout(this.__internal.timerOut), this.__internal.timerOut = setTimeout(this.__internal.transitionOutHandler, h.supported ? 1e3 : 100), a(this.elements.root, Cc.hidden), Xc = this.elements.modal.offsetWidth, void 0 !== this.__internal.className && "" !== this.__internal.className && i(this.elements.root, this.__internal.className), "function" == typeof this.hooks.onclose && this.hooks.onclose.call(this), A("onclose", this), L.splice(L.indexOf(this), 1), this.__internal.isOpen = !1, o()), L.length || "0" !== gc || document.body.removeAttribute("tabindex"), this
                        },
                        closeOthers: function () {
                            return X.closeAll(this), this
                        },
                        destroy: function () {
                            return this.__internal.isOpen ? (this.__internal.destroy = function () {
                                b(this, c)
                            }, this.close()) : b(this, c), this
                        }
                    }
                }(),
                W = function () {
                    function c(c) {
                        c.__internal || (c.__internal = {
                            position: X.defaults.notifier.position,
                            delay: X.defaults.notifier.delay
                        }, s = document.createElement("DIV"), o(c)), s.parentNode !== document.body && document.body.appendChild(s)
                    }

                    function e(c) {
                        c.__internal.pushed = !0, l.push(c)
                    }

                    function n(c) {
                        l.splice(l.indexOf(c), 1), c.__internal.pushed = !1
                    }

                    function o(c) {
                        switch (s.className = b.base, c.__internal.position) {
                            case "top-right":
                                a(s, b.top + " " + b.right);
                                break;
                            case "top-left":
                                a(s, b.top + " " + b.left);
                                break;
                            case "top-center":
                                a(s, b.top + " " + b.center);
                                break;
                            case "bottom-left":
                                a(s, b.bottom + " " + b.left);
                                break;
                            case "bottom-center":
                                a(s, b.bottom + " " + b.center);
                                break;
                            default:
                            case "bottom-right":
                                a(s, b.bottom + " " + b.right)
                        }
                    }

                    function M(c, o) {
                        function M(c, e) {
                            e.__internal.closeButton && "true" !== c.target.getAttribute("data-close") || e.dismiss(!0)
                        }

                        function l(c, e) {
                            q(e.element, h.type, l), s.removeChild(e.element)
                        }

                        function z(c) {
                            clearTimeout(c.__internal.timer), clearTimeout(c.__internal.transitionTimeout)
                        }
                        return function (c) {
                            return c.__internal || (c.__internal = {
                                pushed: !1,
                                delay: void 0,
                                timer: void 0,
                                clickHandler: void 0,
                                transitionEndHandler: void 0,
                                transitionTimeout: void 0
                            }, c.__internal.clickHandler = d(c, M), c.__internal.transitionEndHandler = d(c, l)), c
                        }({
                            element: c,
                            push: function (c, t) {
                                if (!this.__internal.pushed) {
                                    e(this), z(this);
                                    var n, o;
                                    switch (arguments.length) {
                                        case 0:
                                            o = this.__internal.delay;
                                            break;
                                        case 1:
                                            "number" == typeof c ? o = c : (n = c, o = this.__internal.delay);
                                            break;
                                        case 2:
                                            n = c, o = t
                                    }
                                    return this.__internal.closeButton = X.defaults.notifier.closeButton, void 0 !== n && this.setContent(n), W.__internal.position.indexOf("top") < 0 ? s.appendChild(this.element) : s.insertBefore(this.element, s.firstChild), r = this.element.offsetWidth, a(this.element, b.visible), O(this.element, "click", this.__internal.clickHandler), this.delay(o)
                                }
                                return this
                            },
                            ondismiss: function () {},
                            callback: o,
                            dismiss: function (c) {
                                return this.__internal.pushed && (z(this), "function" == typeof this.ondismiss && !1 === this.ondismiss.call(this) || (q(this.element, "click", this.__internal.clickHandler), void 0 !== this.element && this.element.parentNode === s && (this.__internal.transitionTimeout = setTimeout(this.__internal.transitionEndHandler, h.supported ? 1e3 : 100), i(this.element, b.visible), "function" == typeof this.callback && this.callback.call(this, c)), n(this))), this
                            },
                            delay: function (c) {
                                if (z(this), this.__internal.delay = void 0 === c || isNaN(+c) ? W.__internal.delay : +c, this.__internal.delay > 0) {
                                    var e = this;
                                    this.__internal.timer = setTimeout(function () {
                                        e.dismiss()
                                    }, 1e3 * this.__internal.delay)
                                }
                                return this
                            },
                            setContent: function (c) {
                                if ("string" == typeof c ? (p(this.element), this.element.innerHTML = c) : c instanceof t.HTMLElement && this.element.firstChild !== c && (p(this.element), this.element.appendChild(c)), this.__internal.closeButton) {
                                    var e = document.createElement("span");
                                    a(e, b.close), e.setAttribute("data-close", !0), this.element.appendChild(e)
                                }
                                return this
                            },
                            dismissOthers: function () {
                                return W.dismissAll(this), this
                            }
                        })
                    }
                    var r, s, l = [],
                        b = {
                            base: "alertify-notifier",
                            message: "ajs-message",
                            top: "ajs-top",
                            right: "ajs-right",
                            bottom: "ajs-bottom",
                            left: "ajs-left",
                            center: "ajs-center",
                            visible: "ajs-visible",
                            hidden: "ajs-hidden",
                            close: "ajs-close"
                        };
                    return {
                        setting: function (e, t) {
                            if (c(this), void 0 === t) return this.__internal[e];
                            switch (e) {
                                case "position":
                                    this.__internal.position = t, o(this);
                                    break;
                                case "delay":
                                    this.__internal.delay = t
                            }
                            return this
                        },
                        set: function (c, e) {
                            return this.setting(c, e), this
                        },
                        get: function (c) {
                            return this.setting(c)
                        },
                        create: function (e, t) {
                            c(this);
                            var n = document.createElement("div");
                            return n.className = b.message + ("string" == typeof e && "" !== e ? " ajs-" + e : ""), M(n, t)
                        },
                        dismissAll: function (c) {
                            for (var e = l.slice(0), t = 0; t < e.length; t += 1) {
                                var n = e[t];
                                void 0 !== c && c === n || n.dismiss()
                            }
                        }
                    }
                }(),
                X = new u;
            X.dialog("alert", function () {
                return {
                    main: function (c, e, t) {
                        var n, o, a;
                        switch (arguments.length) {
                            case 1:
                                o = c;
                                break;
                            case 2:
                                "function" == typeof e ? (o = c, a = e) : (n = c, o = e);
                                break;
                            case 3:
                                n = c, o = e, a = t
                        }
                        return this.set("title", n), this.set("message", o), this.set("onok", a), this
                    },
                    setup: function () {
                        return {
                            buttons: [{
                                text: X.defaults.glossary.ok,
                                key: f.ESC,
                                invokeOnClose: !0,
                                className: X.defaults.theme.ok
                            }],
                            focus: {
                                element: 0,
                                select: !1
                            },
                            options: {
                                maximizable: !1,
                                resizable: !1
                            }
                        }
                    },
                    build: function () {},
                    prepare: function () {},
                    setMessage: function (c) {
                        this.setContent(c)
                    },
                    settings: {
                        message: void 0,
                        onok: void 0,
                        label: void 0
                    },
                    settingUpdated: function (c, e, t) {
                        switch (c) {
                            case "message":
                                this.setMessage(t);
                                break;
                            case "label":
                                this.__internal.buttons[0].element && (this.__internal.buttons[0].element.innerHTML = t)
                        }
                    },
                    callback: function (c) {
                        if ("function" == typeof this.get("onok")) {
                            var e = this.get("onok").call(this, c);
                            void 0 !== e && (c.cancel = !e)
                        }
                    }
                }
            }), X.dialog("confirm", function () {
                function c(c) {
                    null !== t.timer && (clearInterval(t.timer), t.timer = null, c.__internal.buttons[t.index].element.innerHTML = t.text)
                }

                function e(e, n, o) {
                    c(e), t.duration = o, t.index = n, t.text = e.__internal.buttons[n].element.innerHTML, t.timer = setInterval(d(e, t.task), 1e3), t.task(null, e)
                }
                var t = {
                    timer: null,
                    index: null,
                    text: null,
                    duration: null,
                    task: function (e, n) {
                        if (n.isOpen()) {
                            if (n.__internal.buttons[t.index].element.innerHTML = t.text + " (&#8207;" + t.duration + "&#8207;) ", t.duration -= 1, -1 === t.duration) {
                                c(n);
                                var o = n.__internal.buttons[t.index],
                                    a = z(t.index, o);
                                "function" == typeof n.callback && n.callback.apply(n, [a]), !1 !== a.close && n.close()
                            }
                        } else c(n)
                    }
                };
                return {
                    main: function (c, e, t, n) {
                        var o, a, i, M;
                        switch (arguments.length) {
                            case 1:
                                a = c;
                                break;
                            case 2:
                                a = c, i = e;
                                break;
                            case 3:
                                a = c, i = e, M = t;
                                break;
                            case 4:
                                o = c, a = e, i = t, M = n
                        }
                        return this.set("title", o), this.set("message", a), this.set("onok", i), this.set("oncancel", M), this
                    },
                    setup: function () {
                        return {
                            buttons: [{
                                text: X.defaults.glossary.ok,
                                key: f.ENTER,
                                className: X.defaults.theme.ok
                            }, {
                                text: X.defaults.glossary.cancel,
                                key: f.ESC,
                                invokeOnClose: !0,
                                className: X.defaults.theme.cancel
                            }],
                            focus: {
                                element: 0,
                                select: !1
                            },
                            options: {
                                maximizable: !1,
                                resizable: !1
                            }
                        }
                    },
                    build: function () {},
                    prepare: function () {},
                    setMessage: function (c) {
                        this.setContent(c)
                    },
                    settings: {
                        message: null,
                        labels: null,
                        onok: null,
                        oncancel: null,
                        defaultFocus: null,
                        reverseButtons: null
                    },
                    settingUpdated: function (c, e, t) {
                        switch (c) {
                            case "message":
                                this.setMessage(t);
                                break;
                            case "labels":
                                "ok" in t && this.__internal.buttons[0].element && (this.__internal.buttons[0].text = t.ok, this.__internal.buttons[0].element.innerHTML = t.ok), "cancel" in t && this.__internal.buttons[1].element && (this.__internal.buttons[1].text = t.cancel, this.__internal.buttons[1].element.innerHTML = t.cancel);
                                break;
                            case "reverseButtons":
                                !0 === t ? this.elements.buttons.primary.appendChild(this.__internal.buttons[0].element) : this.elements.buttons.primary.appendChild(this.__internal.buttons[1].element);
                                break;
                            case "defaultFocus":
                                this.__internal.focus.element = "ok" === t ? 0 : 1
                        }
                    },
                    callback: function (e) {
                        c(this);
                        var t;
                        switch (e.index) {
                            case 0:
                                "function" == typeof this.get("onok") && void 0 !== (t = this.get("onok").call(this, e)) && (e.cancel = !t);
                                break;
                            case 1:
                                "function" == typeof this.get("oncancel") && void 0 !== (t = this.get("oncancel").call(this, e)) && (e.cancel = !t)
                        }
                    },
                    autoOk: function (c) {
                        return e(this, 0, c), this
                    },
                    autoCancel: function (c) {
                        return e(this, 1, c), this
                    }
                }
            }), X.dialog("prompt", function () {
                var c = document.createElement("INPUT"),
                    e = document.createElement("P");
                return {
                    main: function (c, e, t, n, o) {
                        var a, i, M, r, s;
                        switch (arguments.length) {
                            case 1:
                                i = c;
                                break;
                            case 2:
                                i = c, M = e;
                                break;
                            case 3:
                                i = c, M = e, r = t;
                                break;
                            case 4:
                                i = c, M = e, r = t, s = n;
                                break;
                            case 5:
                                a = c, i = e, M = t, r = n, s = o
                        }
                        return this.set("title", a), this.set("message", i), this.set("value", M), this.set("onok", r), this.set("oncancel", s), this
                    },
                    setup: function () {
                        return {
                            buttons: [{
                                text: X.defaults.glossary.ok,
                                key: f.ENTER,
                                className: X.defaults.theme.ok
                            }, {
                                text: X.defaults.glossary.cancel,
                                key: f.ESC,
                                invokeOnClose: !0,
                                className: X.defaults.theme.cancel
                            }],
                            focus: {
                                element: c,
                                select: !0
                            },
                            options: {
                                maximizable: !1,
                                resizable: !1
                            }
                        }
                    },
                    build: function () {
                        c.className = X.defaults.theme.input, c.setAttribute("type", "text"), c.value = this.get("value"), this.elements.content.appendChild(e), this.elements.content.appendChild(c)
                    },
                    prepare: function () {},
                    setMessage: function (c) {
                        "string" == typeof c ? (p(e), e.innerHTML = c) : c instanceof t.HTMLElement && e.firstChild !== c && (p(e), e.appendChild(c))
                    },
                    settings: {
                        message: void 0,
                        labels: void 0,
                        onok: void 0,
                        oncancel: void 0,
                        value: "",
                        type: "text",
                        reverseButtons: void 0
                    },
                    settingUpdated: function (e, t, n) {
                        switch (e) {
                            case "message":
                                this.setMessage(n);
                                break;
                            case "value":
                                c.value = n;
                                break;
                            case "type":
                                switch (n) {
                                    case "text":
                                    case "color":
                                    case "date":
                                    case "datetime-local":
                                    case "email":
                                    case "month":
                                    case "number":
                                    case "password":
                                    case "search":
                                    case "tel":
                                    case "time":
                                    case "week":
                                        c.type = n;
                                        break;
                                    default:
                                        c.type = "text"
                                }
                                break;
                            case "labels":
                                n.ok && this.__internal.buttons[0].element && (this.__internal.buttons[0].element.innerHTML = n.ok), n.cancel && this.__internal.buttons[1].element && (this.__internal.buttons[1].element.innerHTML = n.cancel);
                                break;
                            case "reverseButtons":
                                !0 === n ? this.elements.buttons.primary.appendChild(this.__internal.buttons[0].element) : this.elements.buttons.primary.appendChild(this.__internal.buttons[1].element)
                        }
                    },
                    callback: function (e) {
                        var t;
                        switch (e.index) {
                            case 0:
                                this.settings.value = c.value, "function" == typeof this.get("onok") && void 0 !== (t = this.get("onok").call(this, e, this.settings.value)) && (e.cancel = !t);
                                break;
                            case 1:
                                "function" == typeof this.get("oncancel") && void 0 !== (t = this.get("oncancel").call(this, e)) && (e.cancel = !t), e.cancel || (c.value = this.settings.value)
                        }
                    }
                }
            }), "object" == typeof c && "object" == typeof c.exports ? c.exports = X : (n = [], void 0 !== (o = function () {
                return X
            }.apply(e, n)) && (c.exports = o))
        }("undefined" != typeof window ? window : this)
    },
    785: function (c, e, t) {
        "use strict";

        function n(c, e) {
            if (c) {
                var t = i()(c, "YYYY-MM-DD").format("YYYY-MM-DD"),
                    n = i()().tz("Asia/Bangkok").format("HH:mm:ss");
                return i()(t + " " + n).valueOf() + e
            }
            return i()().valueOf() + e
        }

        function o(c, e) {
            return c ? i()(n(c, e)) : i()(n(c, e)).tz("Asia/Bangkok")
        }
        e.a = o;
        var a = t(1),
            i = t.n(a),
            M = t(787);
        t.n(M)
    },
    787: function (c, e, t) {
        (c.exports = t(799)).tz.load(t(798))
    },
    795: function (c, e, t) {
        "use strict";
        var n = {
            name: "no-ssr",
            props: ["placeholder"],
            data: function () {
                return {
                    canRender: !1
                }
            },
            mounted: function () {
                this.canRender = !0
            },
            render: function (c) {
                return this.canRender ? this.$slots.default && this.$slots.default[0] : c(this.placeholder)
            }
        };
        c.exports = n
    },
    798: function (c, e) {
        c.exports = {
            version: "2018e",
            zones: ["Africa/Abidjan|LMT GMT|g.8 0|01|-2ldXH.Q|48e5", "Africa/Accra|LMT GMT +0020|.Q 0 -k|012121212121212121212121212121212121212121212121|-26BbX.8 6tzX.8 MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE 1BAk MnE 1C0k MnE 1BAk MnE 1BAk MnE|41e5", "Africa/Nairobi|LMT EAT +0230 +0245|-2r.g -30 -2u -2J|01231|-1F3Cr.g 3Dzr.g okMu MFXJ|47e5", "Africa/Algiers|PMT WET WEST CET CEST|-9.l 0 -10 -10 -20|0121212121212121343431312123431213|-2nco9.l cNb9.l HA0 19A0 1iM0 11c0 1oo0 Wo0 1rc0 QM0 1EM0 UM0 DA0 Imo0 rd0 De0 9Xz0 1fb0 1ap0 16K0 2yo0 mEp0 hwL0 jxA0 11A0 dDd0 17b0 11B0 1cN0 2Dy0 1cN0 1fB0 1cL0|26e5", "Africa/Lagos|LMT WAT|-d.A -10|01|-22y0d.A|17e6", "Africa/Bissau|LMT -01 GMT|12.k 10 0|012|-2ldX0 2xoo0|39e4", "Africa/Maputo|LMT CAT|-2a.k -20|01|-2GJea.k|26e5", "Africa/Cairo|EET EEST|-20 -30|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-1bIO0 vb0 1ip0 11z0 1iN0 1nz0 12p0 1pz0 10N0 1pz0 16p0 1jz0 s3d0 Vz0 1oN0 11b0 1oO0 10N0 1pz0 10N0 1pb0 10N0 1pb0 10N0 1pb0 10N0 1pz0 10N0 1pb0 10N0 1pb0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1WL0 rd0 1Rz0 wp0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1qL0 Xd0 1oL0 11d0 1oL0 11d0 1pb0 11d0 1oL0 11d0 1oL0 11d0 1ny0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 WL0 1qN0 Rb0 1wp0 On0 1zd0 Lz0 1EN0 Fb0 c10 8n0 8Nd0 gL0 e10 mn0|15e6", "Africa/Casablanca|LMT WET WEST CET|u.k 0 -10 -10|0121212121212121213121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2gMnt.E 130Lt.E rb0 Dd0 dVb0 b6p0 TX0 EoB0 LL0 gnd0 rz0 43d0 AL0 1Nd0 XX0 1Cp0 pz0 dEp0 4mn0 SyN0 AL0 1Nd0 wn0 1FB0 Db0 1zd0 Lz0 1Nf0 wM0 co0 go0 1o00 s00 dA0 vc0 11A0 A00 e00 y00 11A0 uM0 e00 Dc0 11A0 s00 e00 IM0 WM0 mo0 gM0 LA0 WM0 jA0 e00 Rc0 11A0 e00 e00 U00 11A0 8o0 e00 11A0 11A0 5A0 e00 17c0 1fA0 1a00 1a00 1fA0 17c0 1io0 14o0 1lc0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1lc0 14o0 1fA0|32e5", "Africa/Ceuta|WET WEST CET CEST|0 -10 -10 -20|010101010101010101010232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-25KN0 11z0 drd0 18p0 3HX0 17d0 1fz0 1a10 1io0 1a00 1y7o0 LL0 gnd0 rz0 43d0 AL0 1Nd0 XX0 1Cp0 pz0 dEp0 4VB0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|85e3", "Africa/El_Aaiun|LMT -01 WET WEST|Q.M 10 0 -10|01232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1rDz7.c 1GVA7.c 6L0 AL0 1Nd0 XX0 1Cp0 pz0 1cBB0 AL0 1Nd0 wn0 1FB0 Db0 1zd0 Lz0 1Nf0 wM0 co0 go0 1o00 s00 dA0 vc0 11A0 A00 e00 y00 11A0 uM0 e00 Dc0 11A0 s00 e00 IM0 WM0 mo0 gM0 LA0 WM0 jA0 e00 Rc0 11A0 e00 e00 U00 11A0 8o0 e00 11A0 11A0 5A0 e00 17c0 1fA0 1a00 1a00 1fA0 17c0 1io0 14o0 1lc0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1lc0 14o0 1fA0|20e4", "Africa/Johannesburg|SAST SAST SAST|-1u -20 -30|012121|-2GJdu 1Ajdu 1cL0 1cN0 1cL0|84e5", "Africa/Juba|LMT CAT CAST EAT|-26.s -20 -30 -30|01212121212121212121212121212121213|-1yW26.s 1zK06.s 16L0 1iN0 17b0 1jd0 17b0 1ip0 17z0 1i10 17X0 1hB0 18n0 1hd0 19b0 1gp0 19z0 1iN0 17b0 1ip0 17z0 1i10 18n0 1hd0 18L0 1gN0 19b0 1gp0 19z0 1iN0 17z0 1i10 17X0 yGd0", "Africa/Khartoum|LMT CAT CAST EAT|-2a.8 -20 -30 -30|012121212121212121212121212121212131|-1yW2a.8 1zK0a.8 16L0 1iN0 17b0 1jd0 17b0 1ip0 17z0 1i10 17X0 1hB0 18n0 1hd0 19b0 1gp0 19z0 1iN0 17b0 1ip0 17z0 1i10 18n0 1hd0 18L0 1gN0 19b0 1gp0 19z0 1iN0 17z0 1i10 17X0 yGd0 HjL0|51e5", "Africa/Monrovia|MMT MMT GMT|H.8 I.u 0|012|-23Lzg.Q 28G01.m|11e5", "Africa/Ndjamena|LMT WAT WAST|-10.c -10 -20|0121|-2le10.c 2J3c0.c Wn0|13e5", "Africa/Sao_Tome|LMT GMT WAT|A.J 0 -10|012|-2le00 4i6N0", "Africa/Tripoli|LMT CET CEST EET|-Q.I -10 -20 -20|012121213121212121212121213123123|-21JcQ.I 1hnBQ.I vx0 4iP0 xx0 4eN0 Bb0 7ip0 U0n0 A10 1db0 1cN0 1db0 1dd0 1db0 1eN0 1bb0 1e10 1cL0 1c10 1db0 1dd0 1db0 1cN0 1db0 1q10 fAn0 1ep0 1db0 AKq0 TA0 1o00|11e5", "Africa/Tunis|PMT CET CEST|-9.l -10 -20|0121212121212121212121212121212121|-2nco9.l 18pa9.l 1qM0 DA0 3Tc0 11B0 1ze0 WM0 7z0 3d0 14L0 1cN0 1f90 1ar0 16J0 1gXB0 WM0 1rA0 11c0 nwo0 Ko0 1cM0 1cM0 1rA0 10M0 zuM0 10N0 1aN0 1qM0 WM0 1qM0 11A0 1o00|20e5", "Africa/Windhoek|+0130 SAST SAST CAT WAT|-1u -20 -30 -20 -10|01213434343434343434343434343434343434343434343434343|-2GJdu 1Ajdu 1cL0 1SqL0 9Io0 16P0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0|32e4", "America/Adak|NST NWT NPT BST BDT AHST HST HDT|b0 a0 a0 b0 a0 a0 a0 90|012034343434343434343434343434343456767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17SX0 8wW0 iB0 Qlb0 52O0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cm0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|326", "America/Anchorage|AST AWT APT AHST AHDT YST AKST AKDT|a0 90 90 a0 90 90 90 80|012034343434343434343434343434343456767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17T00 8wX0 iA0 Qlb0 52O0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cm0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|30e4", "America/Port_of_Spain|LMT AST|46.4 40|01|-2kNvR.U|43e3", "America/Araguaina|LMT -03 -02|3c.M 30 20|0121212121212121212121212121212121212121212121212121|-2glwL.c HdKL.c 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 dMN0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 ny10 Lz0|14e4", "America/Argentina/Buenos_Aires|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323232323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wp0 Rb0 1wp0 TX0 A4p0 uL0 1qN0 WL0", "America/Argentina/Catamarca|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323132321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 rlB0 7B0 8zb0 uL0", "America/Argentina/Cordoba|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323132323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 A4p0 uL0 1qN0 WL0", "America/Argentina/Jujuy|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323121323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1ze0 TX0 1ld0 WK0 1wp0 TX0 A4p0 uL0", "America/Argentina/La_Rioja|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323231232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Qn0 qO0 16n0 Rb0 1wp0 TX0 rlB0 7B0 8zb0 uL0", "America/Argentina/Mendoza|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232312121321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1u20 SL0 1vd0 Tb0 1wp0 TW0 ri10 Op0 7TX0 uL0", "America/Argentina/Rio_Gallegos|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wp0 Rb0 1wp0 TX0 rlB0 7B0 8zb0 uL0", "America/Argentina/Salta|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323231323232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 A4p0 uL0", "America/Argentina/San_Juan|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323231232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Qn0 qO0 16n0 Rb0 1wp0 TX0 rld0 m10 8lb0 uL0", "America/Argentina/San_Luis|CMT -04 -03 -02|4g.M 40 30 20|012121212121212121212121212121212121212121232323121212321212|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 XX0 1q20 SL0 AN0 vDb0 m10 8lb0 8L0 jd0 1qN0 WL0 1qN0", "America/Argentina/Tucuman|CMT -04 -03 -02|4g.M 40 30 20|0121212121212121212121212121212121212121212323232313232123232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wq0 Ra0 1wp0 TX0 rlB0 4N0 8BX0 uL0 1qN0 WL0", "America/Argentina/Ushuaia|CMT -04 -03 -02|4g.M 40 30 20|01212121212121212121212121212121212121212123232323232321232|-20UHH.c pKnH.c Mn0 1iN0 Tb0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 1C10 LX0 1C10 LX0 1C10 LX0 1C10 Mn0 MN0 2jz0 MN0 4lX0 u10 5Lb0 1pB0 Fnz0 u10 uL0 1vd0 SL0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 zvd0 Bz0 1tB0 TX0 1wp0 Rb0 1wp0 Rb0 1wp0 TX0 rkN0 8p0 8zb0 uL0", "America/Curacao|LMT -0430 AST|4z.L 4u 40|012|-2kV7o.d 28KLS.d|15e4", "America/Asuncion|AMT -04 -03|3O.E 40 30|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-1x589.k 1DKM9.k 3CL0 3Dd0 10L0 1pB0 10n0 1pB0 10n0 1pB0 1cL0 1dd0 1db0 1dd0 1cL0 1dd0 1cL0 1dd0 1cL0 1dd0 1db0 1dd0 1cL0 1dd0 1cL0 1dd0 1cL0 1dd0 1db0 1dd0 1cL0 1lB0 14n0 1dd0 1cL0 1fd0 WL0 1rd0 1aL0 1dB0 Xz0 1qp0 Xb0 1qN0 10L0 1rB0 TX0 1tB0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 1cL0 WN0 1qL0 11B0 1nX0 1ip0 WL0 1qN0 WL0 1qN0 WL0 1tB0 TX0 1tB0 TX0 1tB0 19X0 1a10 1fz0 1a10 1fz0 1cN0 17b0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1ip0 17b0 1ip0 17b0 1ip0|28e5", "America/Atikokan|CST CDT CWT CPT EST|60 50 50 50 50|0101234|-25TQ0 1in0 Rnb0 3je0 8x30 iw0|28e2", "America/Bahia_Banderas|LMT MST CST PST MDT CDT|71 70 60 80 60 50|0121212131414141414141414141414141414152525252525252525252525252525252525252525252525252525252|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 otX0 gmN0 P2N0 13Vd0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nW0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|84e3", "America/Bahia|LMT -03 -02|2y.4 30 20|01212121212121212121212121212121212121212121212121212121212121|-2glxp.U HdLp.U 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 l5B0 Rb0|27e5", "America/Barbados|LMT BMT AST ADT|3W.t 3W.t 40 30|01232323232|-1Q0I1.v jsM0 1ODC1.v IL0 1ip0 17b0 1ip0 17b0 1ld0 13b0|28e4", "America/Belem|LMT -03 -02|3d.U 30 20|012121212121212121212121212121|-2glwK.4 HdKK.4 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0|20e5", "America/Belize|LMT CST -0530 CDT|5Q.M 60 5u 50|01212121212121212121212121212121212121212121212121213131|-2kBu7.c fPA7.c Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1wou Rbu 1zcu Onu 1zcu Onu 1zcu Rbu 1wou Rbu 1f0Mu qn0 lxB0 mn0|57e3", "America/Blanc-Sablon|AST ADT AWT APT|40 30 30 30|010230|-25TS0 1in0 UGp0 8x50 iu0|11e2", "America/Boa_Vista|LMT -04 -03|42.E 40 30|0121212121212121212121212121212121|-2glvV.k HdKV.k 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 smp0 WL0 1tB0 2L0|62e2", "America/Bogota|BMT -05 -04|4U.g 50 40|0121|-2eb73.I 38yo3.I 2en0|90e5", "America/Boise|PST PDT MST MWT MPT MDT|80 70 70 60 60 60|0101023425252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252|-261q0 1nX0 11B0 1nX0 8C10 JCL0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 Dd0 1Kn0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|21e4", "America/Cambridge_Bay|-00 MST MWT MPT MDDT MDT CST CDT EST|0 70 60 60 50 60 60 50 50|0123141515151515151515151515151515151515151515678651515151515151515151515151515151515151515151515151515151515151515151515151|-21Jc0 RO90 8x20 ix0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11A0 1nX0 2K0 WQ0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|15e2", "America/Campo_Grande|LMT -04 -03|3C.s 40 30|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-2glwl.w HdLl.w 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 1C10 Lz0 1Ip0 HX0 1zd0 On0 1HB0 IL0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1zd0 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1HB0 FX0 1HB0 FX0 1HB0 IL0 1HB0 FX0 1HB0 IL0 1EN0 FX0 1HB0 FX0 1HB0 IL0 1EN0 IL0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1Kp0 FX0 1HB0 IL0 1EN0 FX0 1HB0 FX0 1HB0 IL0 1EN0|77e4", "America/Cancun|LMT CST EST EDT CDT|5L.4 60 50 40 50|0123232341414141414141414141414141414141412|-1UQG0 2q2o0 yLB0 1lb0 14p0 1lb0 14p0 Lz0 xB0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 Dd0|63e4", "America/Caracas|CMT -0430 -04|4r.E 4u 40|01212|-2kV7w.k 28KM2.k 1IwOu kqo0|29e5", "America/Cayenne|LMT -04 -03|3t.k 40 30|012|-2mrwu.E 2gWou.E|58e3", "America/Panama|CMT EST|5j.A 50|01|-2uduE.o|15e5", "America/Chicago|CST CDT EST CWT CPT|60 50 50 50 50|01010101010101010101010101010101010102010101010103401010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 1wp0 TX0 WN0 1qL0 1cN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 11B0 1Hz0 14p0 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 RB0 8x30 iw0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|92e5", "America/Chihuahua|LMT MST CST CDT MDT|74.k 70 60 50 60|0121212323241414141414141414141414141414141414141414141414141414141414141414141414141414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 2zQN0 1lb0 14p0 1lb0 14q0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|81e4", "America/Costa_Rica|SJMT CST CDT|5A.d 60 50|0121212121|-1Xd6n.L 2lu0n.L Db0 1Kp0 Db0 pRB0 15b0 1kp0 mL0|12e5", "America/Creston|MST PST|70 80|010|-29DR0 43B0|53e2", "America/Cuiaba|LMT -04 -03|3I.k 40 30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-2glwf.E HdLf.E 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 4a10 HX0 1zd0 On0 1HB0 IL0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1zd0 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1HB0 FX0 1HB0 FX0 1HB0 IL0 1HB0 FX0 1HB0 IL0 1EN0 FX0 1HB0 FX0 1HB0 IL0 1EN0 IL0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1Kp0 FX0 1HB0 IL0 1EN0 FX0 1HB0 FX0 1HB0 IL0 1EN0|54e4", "America/Danmarkshavn|LMT -03 -02 GMT|1e.E 30 20 0|01212121212121212121212121212121213|-2a5WJ.k 2z5fJ.k 19U0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 DC0|8", "America/Dawson_Creek|PST PDT PWT PPT MST|80 70 70 70 70|0102301010101010101010101010101010101010101010101010101014|-25TO0 1in0 UGp0 8x10 iy0 3NB0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 ML0|12e3", "America/Dawson|YST YDT YWT YPT YDDT PST PDT|90 80 80 80 70 80 70|0101023040565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565|-25TN0 1in0 1o10 13V0 Ser0 8x00 iz0 LCL0 1fA0 jrA0 fNd0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|13e2", "America/Denver|MST MDT MWT MPT|70 60 60 60|01010101023010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261r0 1nX0 11B0 1nX0 11B0 1qL0 WN0 mn0 Ord0 8x20 ix0 LCN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|26e5", "America/Detroit|LMT CST EST EWT EPT EDT|5w.b 60 50 40 40 40|012342525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252|-2Cgir.N peqr.N 156L0 8x40 iv0 6fd0 11z0 XQp0 1cL0 s10 1Vz0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|37e5", "America/Edmonton|LMT MST MDT MWT MPT|7x.Q 70 60 60 60|01212121212121341212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2yd4q.8 shdq.8 1in0 17d0 hz0 2dB0 1fz0 1a10 11z0 1qN0 WL0 1qN0 11z0 IGN0 8x20 ix0 3NB0 11z0 LFB0 1cL0 3Cp0 1cL0 66N0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|10e5", "America/Eirunepe|LMT -05 -04|4D.s 50 40|0121212121212121212121212121212121|-2glvk.w HdLk.w 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 dPB0 On0 yTd0 d5X0|31e3", "America/El_Salvador|LMT CST CDT|5U.M 60 50|012121|-1XiG3.c 2Fvc3.c WL0 1qN0 WL0|11e5", "America/Tijuana|LMT MST PST PDT PWT PPT|7M.4 70 80 70 70 70|012123245232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1UQE0 4PX0 8mM0 8lc0 SN0 1cL0 pHB0 83r0 zI0 5O10 1Rz0 cOO0 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 BUp0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 U10 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|20e5", "America/Fort_Nelson|PST PDT PWT PPT MST|80 70 70 70 70|01023010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010104|-25TO0 1in0 UGp0 8x10 iy0 3NB0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0|39e2", "America/Fort_Wayne|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|010101023010101010101010101040454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 QI10 Db0 RB0 8x30 iw0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 5Tz0 1o10 qLb0 1cL0 1cN0 1cL0 1qhd0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Fortaleza|LMT -03 -02|2y 30 20|0121212121212121212121212121212121212121|-2glxq HdLq 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 nsp0 WL0 1tB0 5z0 2mN0 On0|34e5", "America/Glace_Bay|LMT AST ADT AWT APT|3X.M 40 30 30 30|012134121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2IsI0.c CwO0.c 1in0 UGp0 8x50 iu0 iq10 11z0 Jg10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|19e3", "America/Godthab|LMT -03 -02|3q.U 30 20|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2a5Ux.4 2z5dx.4 19U0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|17e3", "America/Goose_Bay|NST NDT NST NDT NWT NPT AST ADT ADDT|3u.Q 2u.Q 3u 2u 2u 2u 40 30 20|010232323232323245232323232323232323232323232323232323232326767676767676767676767676767676767676767676768676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-25TSt.8 1in0 DXb0 2HbX.8 WL0 1qN0 WL0 1qN0 WL0 1tB0 TX0 1tB0 WL0 1qN0 WL0 1qN0 7UHu itu 1tB0 WL0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1tB0 WL0 1ld0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 S10 g0u 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14n1 1lb0 14p0 1nW0 11C0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zcX Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|76e2", "America/Grand_Turk|KMT EST EDT AST|57.a 50 40 40|01212121212121212121212121212121212121212121212121212121212121212121212121232121212121212121212121212121212121212121|-2l1uQ.O 2HHBQ.O 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 5Ip0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|37e2", "America/Guatemala|LMT CST CDT|62.4 60 50|0121212121|-24KhV.U 2efXV.U An0 mtd0 Nz0 ifB0 17b0 zDB0 11z0|13e5", "America/Guayaquil|QMT -05 -04|5e 50 40|0121|-1yVSK 2uILK rz0|27e5", "America/Guyana|LMT -0345 -03 -04|3Q.E 3J 30 40|0123|-2dvU7.k 2r6LQ.k Bxbf|80e4", "America/Halifax|LMT AST ADT AWT APT|4e.o 40 30 30 30|0121212121212121212121212121212121212121212121212134121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2IsHJ.A xzzJ.A 1db0 3I30 1in0 3HX0 IL0 1E10 ML0 1yN0 Pb0 1Bd0 Mn0 1Bd0 Rz0 1w10 Xb0 1w10 LX0 1w10 Xb0 1w10 Lz0 1C10 Jz0 1E10 OL0 1yN0 Un0 1qp0 Xb0 1qp0 11X0 1w10 Lz0 1HB0 LX0 1C10 FX0 1w10 Xb0 1qp0 Xb0 1BB0 LX0 1td0 Xb0 1qp0 Xb0 Rf0 8x50 iu0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 3Qp0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 3Qp0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 6i10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|39e4", "America/Havana|HMT CST CDT|5t.A 50 40|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1Meuu.o 72zu.o ML0 sld0 An0 1Nd0 Db0 1Nd0 An0 6Ep0 An0 1Nd0 An0 JDd0 Mn0 1Ap0 On0 1fd0 11X0 1qN0 WL0 1wp0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 14n0 1ld0 14L0 1kN0 15b0 1kp0 1cL0 1cN0 1fz0 1a10 1fz0 1fB0 11z0 14p0 1nX0 11B0 1nX0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 14n0 1ld0 14n0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 1a10 1in0 1a10 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 17c0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 11A0 6i00 Rc0 1wo0 U00 1tA0 Rc0 1wo0 U00 1wo0 U00 1zc0 U00 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0|21e5", "America/Hermosillo|LMT MST CST PST MDT|7n.Q 70 60 80 60|0121212131414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 otX0 gmN0 P2N0 13Vd0 1lb0 14p0 1lb0 14p0 1lb0|64e4", "America/Indiana/Knox|CST CDT CWT CPT EST|60 50 50 50 50|0101023010101010101010101010101010101040101010101010101010101010101010101010101010101010141010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 3NB0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 11z0 1o10 11z0 1o10 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 3Cn0 8wp0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 z8o0 1o00 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Marengo|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|0101023010101010101010104545454545414545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 dyN0 11z0 6fd0 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 jrz0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1VA0 LA0 1BX0 1e6p0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Petersburg|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010104010101010101010101010141014545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 njX0 WN0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 3Fb0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 19co0 1o00 Rd0 1zb0 Oo0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Tell_City|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010101010454541010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 g0p0 11z0 1o10 11z0 1qL0 WN0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 caL0 1cL0 1cN0 1cL0 1qhd0 1o00 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Vevay|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|010102304545454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 kPB0 Awn0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1lnd0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Vincennes|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010101010454541014545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 g0p0 11z0 1o10 11z0 1qL0 WN0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 caL0 1cL0 1cN0 1cL0 1qhd0 1o00 Rd0 1zb0 Oo0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Indiana/Winamac|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|01010230101010101010101010101010101010454541054545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 jrz0 1cL0 1cN0 1cL0 1qhd0 1o00 Rd0 1za0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Inuvik|-00 PST PDDT MST MDT|0 80 60 70 60|0121343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-FnA0 tWU0 1fA0 wPe0 2pz0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|35e2", "America/Iqaluit|-00 EWT EPT EST EDDT EDT CST CDT|0 40 40 50 30 40 60 50|01234353535353535353535353535353535353535353567353535353535353535353535353535353535353535353535353535353535353535353535353|-16K00 7nX0 iv0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11C0 1nX0 11A0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|67e2", "America/Jamaica|KMT EST EDT|57.a 50 40|0121212121212121212121|-2l1uQ.O 2uM1Q.O 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0|94e4", "America/Juneau|PST PWT PPT PDT YDT YST AKST AKDT|80 70 70 70 80 90 90 80|01203030303030303030303030403030356767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17T20 8x10 iy0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cM0 1cM0 1cL0 1cN0 1fz0 1a10 1fz0 co0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|33e3", "America/Kentucky/Louisville|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|0101010102301010101010101010101010101454545454545414545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 3Fd0 Nb0 LPd0 11z0 RB0 8x30 iw0 Bb0 10N0 2bB0 8in0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 xz0 gso0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1VA0 LA0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Kentucky/Monticello|CST CDT CWT CPT EST EDT|60 50 50 50 50 40|0101023010101010101010101010101010101010101010101010101010101010101010101454545454545454545454545454545454545454545454545454545454545454545454545454|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 SWp0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11A0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/La_Paz|CMT BST -04|4w.A 3w.A 40|012|-1x37r.o 13b0|19e5", "America/Lima|LMT -05 -04|58.A 50 40|0121212121212121|-2tyGP.o 1bDzP.o zX0 1aN0 1cL0 1cN0 1cL0 1PrB0 zX0 1O10 zX0 6Gp0 zX0 98p0 zX0|11e6", "America/Los_Angeles|PST PDT PWT PPT|80 70 70 70|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261q0 1nX0 11B0 1nX0 SgN0 8x10 iy0 5Wp1 1VaX 3dA0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1fA0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|15e6", "America/Maceio|LMT -03 -02|2m.Q 30 20|012121212121212121212121212121212121212121|-2glxB.8 HdLB.8 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 dMN0 Lz0 8Q10 WL0 1tB0 5z0 2mN0 On0|93e4", "America/Managua|MMT CST EST CDT|5J.c 60 50 50|0121313121213131|-1quie.M 1yAMe.M 4mn0 9Up0 Dz0 1K10 Dz0 s3F0 1KH0 DB0 9In0 k8p0 19X0 1o30 11y0|22e5", "America/Manaus|LMT -04 -03|40.4 40 30|01212121212121212121212121212121|-2glvX.U HdKX.U 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 dPB0 On0|19e5", "America/Martinique|FFMT AST ADT|44.k 40 30|0121|-2mPTT.E 2LPbT.E 19X0|39e4", "America/Matamoros|LMT CST CDT|6E 60 50|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1UQG0 2FjC0 1nX0 i6p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 U10 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|45e4", "America/Mazatlan|LMT MST CST PST MDT|75.E 70 60 80 60|0121212131414141414141414141414141414141414141414141414141414141414141414141414141414141414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 otX0 gmN0 P2N0 13Vd0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|44e4", "America/Menominee|CST CDT CWT CPT EST|60 50 50 50 50|01010230101041010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 1o10 11z0 LCN0 1fz0 6410 9Jb0 1cM0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|85e2", "America/Merida|LMT CST EST CDT|5W.s 60 50 50|0121313131313131313131313131313131313131313131313131313131313131313131313131313131313131|-1UQG0 2q2o0 2hz0 wu30 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|11e5", "America/Metlakatla|PST PWT PPT PDT AKST AKDT|80 70 70 70 90 80|0120303030303030303030303030303030454545454545454545454545454545454545454545454|-17T20 8x10 iy0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1hU10 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|14e2", "America/Mexico_City|LMT MST CST CDT CWT|6A.A 70 60 50 50|012121232324232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 gEn0 TX0 3xd0 Jb0 6zB0 SL0 e5d0 17b0 1Pff0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|20e6", "America/Miquelon|LMT AST -03 -02|3I.E 40 30 20|012323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-2mKkf.k 2LTAf.k gQ10 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|61e2", "America/Moncton|EST AST ADT AWT APT|50 40 30 30 30|012121212121212121212134121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2IsH0 CwN0 1in0 zAo0 An0 1Nd0 An0 1Nd0 An0 1Nd0 An0 1Nd0 An0 1Nd0 An0 1K10 Lz0 1zB0 NX0 1u10 Wn0 S20 8x50 iu0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 3Cp0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14n1 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 ReX 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|64e3", "America/Monterrey|LMT CST CDT|6F.g 60 50|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1UQG0 2FjC0 1nX0 i6p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0|41e5", "America/Montevideo|LMT MMT -04 -03 -0330 -0230 -02 -0130|3I.P 3I.P 40 30 3u 2u 20 1u|012343434343434343434343435353636353636375363636363636363636363636363636363636363636363|-2tRUf.9 sVc0 8jcf.9 1db0 1dcu 1cLu 1dcu 1cLu ircu 11zu 1o0u 11zu 1o0u 11zu 1o0u 11zu 1qMu WLu 1qMu WLu 1fAu 1cLu 1o0u 11zu NAu 3jXu zXu Dq0u 19Xu pcu jz0 cm10 19X0 6tB0 1fbu 3o0u jX0 4vB0 xz0 3Cp0 mmu 1a10 IMu Db0 4c10 uL0 1Nd0 An0 1SN0 uL0 mp0 28L0 iPB0 un0 1SN0 xz0 1zd0 Lz0 1zd0 Rb0 1zd0 On0 1wp0 Rb0 s8p0 1fB0 1ip0 11z0 1ld0 14n0 1o10 11z0 1o10 11z0 1o10 14n0 1ld0 14n0 1ld0 14n0 1o10 11z0 1o10 11z0 1o10 11z0|17e5", "America/Toronto|EST EDT EWT EPT|50 40 40 40|01010101010101010101010101010101010101010101012301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TR0 1in0 11Wu 1nzu 1fD0 WJ0 1wr0 Nb0 1Ap0 On0 1zd0 On0 1wp0 TX0 1tB0 TX0 1tB0 TX0 1tB0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 4kM0 8x40 iv0 1o10 11z0 1nX0 11z0 1o10 11z0 1o10 1qL0 11D0 1nX0 11B0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|65e5", "America/Nassau|LMT EST EDT|59.u 50 40|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2kNuO.u 26XdO.u 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|24e4", "America/New_York|EST EDT EWT EPT|50 40 40 40|01010101010101010101010101010101010101010101010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261t0 1nX0 11B0 1nX0 11B0 1qL0 1a10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 RB0 8x40 iv0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|21e6", "America/Nipigon|EST EDT EWT EPT|50 40 40 40|010123010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TR0 1in0 Rnb0 3je0 8x40 iv0 19yN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|16e2", "America/Nome|NST NWT NPT BST BDT YST AKST AKDT|b0 a0 a0 b0 a0 90 90 80|012034343434343434343434343434343456767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676767676|-17SX0 8wW0 iB0 Qlb0 52O0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cl0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|38e2", "America/Noronha|LMT -02 -01|29.E 20 10|0121212121212121212121212121212121212121|-2glxO.k HdKO.k 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 nsp0 WL0 1tB0 2L0 2pB0 On0|30e2", "America/North_Dakota/Beulah|MST MDT MWT MPT CST CDT|70 60 60 60 60 50|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101014545454545454545454545454545454545454545454545454545454|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Oo0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/North_Dakota/Center|MST MDT MWT MPT CST CDT|70 60 60 60 60 50|010102301010101010101010101010101010101010101010101010101014545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14o0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/North_Dakota/New_Salem|MST MDT MWT MPT CST CDT|70 60 60 60 60 50|010102301010101010101010101010101010101010101010101010101010101010101010101010101454545454545454545454545454545454545454545454545454545454545454545454|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14o0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "America/Ojinaga|LMT MST CST CDT MDT|6V.E 70 60 50 60|0121212323241414141414141414141414141414141414141414141414141414141414141414141414141414141|-1UQF0 deL0 8lc0 17c0 10M0 1dd0 2zQN0 1lb0 14p0 1lb0 14q0 1lb0 14p0 1nX0 11B0 1nX0 1fB0 WL0 1fB0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 U10 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e3", "America/Pangnirtung|-00 AST AWT APT ADDT ADT EDT EST CST CDT|0 40 30 30 20 30 40 50 60 50|012314151515151515151515151515151515167676767689767676767676767676767676767676767676767676767676767676767676767676767676767|-1XiM0 PnG0 8x50 iu0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1o00 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11C0 1nX0 11A0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|14e2", "America/Paramaribo|LMT PMT PMT -0330 -03|3E.E 3E.Q 3E.A 3u 30|01234|-2nDUj.k Wqo0.c qanX.I 1yVXN.o|24e4", "America/Phoenix|MST MDT MWT|70 60 60|01010202010|-261r0 1nX0 11B0 1nX0 SgN0 4Al1 Ap0 1db0 SWqX 1cL0|42e5", "America/Port-au-Prince|PPMT EST EDT|4N 50 40|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-28RHb 2FnMb 19X0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14q0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 i6n0 1nX0 11B0 1nX0 d430 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 3iN0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e5", "America/Rio_Branco|LMT -05 -04|4v.c 50 40|01212121212121212121212121212121|-2glvs.M HdLs.M 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 NBd0 d5X0|31e4", "America/Porto_Velho|LMT -04 -03|4f.A 40 30|012121212121212121212121212121|-2glvI.o HdKI.o 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0|37e4", "America/Puerto_Rico|AST AWT APT|40 30 30|0120|-17lU0 7XT0 iu0|24e5", "America/Punta_Arenas|SMT -05 -04 -03|4G.K 50 40 30|0102021212121212121232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-2q2jh.e fJAh.e 5knG.K 1Vzh.e jRAG.K 1pbh.e 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 nHX0 op0 blz0 ko0 Qeo0 WL0 1zd0 On0 1ip0 11z0 1o10 11z0 1qN0 WL0 1ld0 14n0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0", "America/Rainy_River|CST CDT CWT CPT|60 50 50 50|010123010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TQ0 1in0 Rnb0 3je0 8x30 iw0 19yN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|842", "America/Rankin_Inlet|-00 CST CDDT CDT EST|0 60 40 50 50|012131313131313131313131313131313131313131313431313131313131313131313131313131313131313131313131313131313131313131313131|-vDc0 keu0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|26e2", "America/Recife|LMT -03 -02|2j.A 30 20|0121212121212121212121212121212121212121|-2glxE.o HdLE.o 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 nsp0 WL0 1tB0 2L0 2pB0 On0|33e5", "America/Regina|LMT MST MDT MWT MPT CST|6W.A 70 60 60 60 60|012121212121212121212121341212121212121212121212121215|-2AD51.o uHe1.o 1in0 s2L0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 66N0 1cL0 1cN0 19X0 1fB0 1cL0 1fB0 1cL0 1cN0 1cL0 M30 8x20 ix0 1ip0 1cL0 1ip0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 3NB0 1cL0 1cN0|19e4", "America/Resolute|-00 CST CDDT CDT EST|0 60 40 50 50|012131313131313131313131313131313131313131313431313131313431313131313131313131313131313131313131313131313131313131313131|-SnA0 GWS0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|229", "America/Santarem|LMT -04 -03|3C.M 40 30|0121212121212121212121212121212|-2glwl.c HdLl.c 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 qe10 xb0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 NBd0|21e4", "America/Santiago|SMT -05 -04 -03|4G.K 50 40 30|010202121212121212321232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-2q2jh.e fJAh.e 5knG.K 1Vzh.e jRAG.K 1pbh.e 11d0 1oL0 11d0 1oL0 11d0 1oL0 11d0 1pb0 11d0 nHX0 op0 9Bz0 jb0 1oN0 ko0 Qeo0 WL0 1zd0 On0 1ip0 11z0 1o10 11z0 1qN0 WL0 1ld0 14n0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0|62e5", "America/Santo_Domingo|SDMT EST EDT -0430 AST|4E 50 40 4u 40|01213131313131414|-1ttjk 1lJMk Mn0 6sp0 Lbu 1Cou yLu 1RAu wLu 1QMu xzu 1Q0u xXu 1PAu 13jB0 e00|29e5", "America/Sao_Paulo|LMT -03 -02|36.s 30 20|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-2glwR.w HdKR.w 1cc0 1e10 1bX0 Ezd0 So0 1vA0 Mn0 1BB0 ML0 1BB0 zX0 pTd0 PX0 2ep0 nz0 1C10 zX0 1C10 LX0 1C10 Mn0 H210 Rb0 1tB0 IL0 1Fd0 FX0 1EN0 FX0 1HB0 Lz0 1EN0 Lz0 1C10 IL0 1HB0 Db0 1HB0 On0 1zd0 On0 1zd0 Lz0 1zd0 Rb0 1wN0 Wn0 1tB0 Rb0 1tB0 WL0 1tB0 Rb0 1zd0 On0 1HB0 FX0 1C10 Lz0 1Ip0 HX0 1zd0 On0 1HB0 IL0 1wp0 On0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 Rb0 1zd0 Lz0 1C10 Lz0 1C10 On0 1zd0 On0 1zd0 On0 1zd0 On0 1HB0 FX0 1HB0 FX0 1HB0 IL0 1HB0 FX0 1HB0 IL0 1EN0 FX0 1HB0 FX0 1HB0 IL0 1EN0 IL0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1HB0 FX0 1Kp0 FX0 1HB0 IL0 1EN0 FX0 1HB0 FX0 1HB0 IL0 1EN0|20e6", "America/Scoresbysund|LMT -02 -01 +00|1r.Q 20 10 0|0121323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-2a5Ww.8 2z5ew.8 1a00 1cK0 1cL0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|452", "America/Sitka|PST PWT PPT PDT YST AKST AKDT|80 70 70 70 90 90 80|01203030303030303030303030303030345656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565|-17T20 8x10 iy0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 co0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|90e2", "America/St_Johns|NST NDT NST NDT NWT NPT NDDT|3u.Q 2u.Q 3u 2u 2u 2u 1u|01010101010101010101010101010101010102323232323232324523232323232323232323232323232323232323232323232323232323232323232323232323232323232326232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-28oit.8 14L0 1nB0 1in0 1gm0 Dz0 1JB0 1cL0 1cN0 1cL0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 1cL0 1cN0 1cL0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 19X0 1fB0 1cL0 1fB0 19X0 1fB0 19X0 10O0 eKX.8 19X0 1iq0 WL0 1qN0 WL0 1qN0 WL0 1tB0 TX0 1tB0 WL0 1qN0 WL0 1qN0 7UHu itu 1tB0 WL0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1tB0 WL0 1ld0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14n1 1lb0 14p0 1nW0 11C0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zcX Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|11e4", "America/Swift_Current|LMT MST MDT MWT MPT CST|7b.k 70 60 60 60 60|012134121212121212121215|-2AD4M.E uHdM.E 1in0 UGp0 8x20 ix0 1o10 17b0 1ip0 11z0 1o10 11z0 1o10 11z0 isN0 1cL0 3Cp0 1cL0 1cN0 11z0 1qN0 WL0 pMp0|16e3", "America/Tegucigalpa|LMT CST CDT|5M.Q 60 50|01212121|-1WGGb.8 2ETcb.8 WL0 1qN0 WL0 GRd0 AL0|11e5", "America/Thule|LMT AST ADT|4z.8 40 30|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2a5To.Q 31NBo.Q 1cL0 1cN0 1cL0 1fB0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|656", "America/Thunder_Bay|CST EST EWT EPT EDT|60 50 40 40 40|0123141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141|-2q5S0 1iaN0 8x40 iv0 XNB0 1cL0 1cN0 1fz0 1cN0 1cL0 3Cp0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|11e4", "America/Vancouver|PST PDT PWT PPT|80 70 70 70|0102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TO0 1in0 UGp0 8x10 iy0 1o10 17b0 1ip0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e5", "America/Whitehorse|YST YDT YWT YPT YDDT PST PDT|90 80 80 80 70 80 70|0101023040565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565656565|-25TN0 1in0 1o10 13V0 Ser0 8x00 iz0 LCL0 1fA0 3NA0 vrd0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e3", "America/Winnipeg|CST CDT CWT CPT|60 50 50 50|010101023010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aIi0 WL0 3ND0 1in0 Jap0 Rb0 aCN0 8x30 iw0 1tB0 11z0 1ip0 11z0 1o10 11z0 1o10 11z0 1rd0 10L0 1op0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 1cL0 1cN0 11z0 6i10 WL0 6i10 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1o00 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1o00 11A0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|66e4", "America/Yakutat|YST YWT YPT YDT AKST AKDT|90 80 80 80 90 80|01203030303030303030303030303030304545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-17T10 8x00 iz0 Vo10 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 cn0 10q0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|642", "America/Yellowknife|-00 MST MWT MPT MDDT MDT|0 70 60 60 50 60|012314151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151515151|-1pdA0 hix0 8x20 ix0 LCL0 1fA0 zgO0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|19e3", "Antarctica/Casey|-00 +08 +11|0 -80 -b0|01212121|-2q00 1DjS0 T90 40P0 KL0 blz0 3m10|10", "Antarctica/Davis|-00 +07 +05|0 -70 -50|01012121|-vyo0 iXt0 alj0 1D7v0 VB0 3Wn0 KN0|70", "Antarctica/DumontDUrville|-00 +10|0 -a0|0101|-U0o0 cfq0 bFm0|80", "Antarctica/Macquarie|AEST AEDT -00 +11|-a0 -b0 0 -b0|0102010101010101010101010101010101010101010101010101010101010101010101010101010101010101013|-29E80 19X0 4SL0 1ayy0 Lvs0 1cM0 1o00 Rc0 1wo0 Rc0 1wo0 U00 1wo0 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1qM0 WM0 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1wo0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 11A0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 11A0 1o00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1cM0 1cM0 1cM0|1", "Antarctica/Mawson|-00 +06 +05|0 -60 -50|012|-CEo0 2fyk0|60", "Pacific/Auckland|NZMT NZST NZST NZDT|-bu -cu -c0 -d0|01020202020202020202020202023232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-1GCVu Lz0 1tB0 11zu 1o0u 11zu 1o0u 11zu 1o0u 14nu 1lcu 14nu 1lcu 1lbu 11Au 1nXu 11Au 1nXu 11Au 1nXu 11Au 1nXu 11Au 1qLu WMu 1qLu 11Au 1n1bu IM0 1C00 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1qM0 14o0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1io0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00|14e5", "Antarctica/Palmer|-00 -03 -04 -02|0 30 40 20|0121212121213121212121212121212121212121212121212121212121212121212121212121212121|-cao0 nD0 1vd0 SL0 1vd0 17z0 1cN0 1fz0 1cN0 1cL0 1cN0 asn0 Db0 jsN0 14N0 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0|40", "Antarctica/Rothera|-00 -03|0 30|01|gOo0|130", "Antarctica/Syowa|-00 +03|0 -30|01|-vs00|20", "Antarctica/Troll|-00 +00 +02|0 0 -20|01212121212121212121212121212121212121212121212121212121212121212121|1puo0 hd0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|40", "Antarctica/Vostok|-00 +06|0 -60|01|-tjA0|25", "Europe/Oslo|CET CEST|-10 -20|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2awM0 Qm0 W6o0 5pf0 WM0 1fA0 1cM0 1cM0 1cM0 1cM0 wJc0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1qM0 WM0 zpc0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|62e4", "Asia/Riyadh|LMT +03|-36.Q -30|01|-TvD6.Q|57e5", "Asia/Almaty|LMT +05 +06 +07|-57.M -50 -60 -70|012323232323232323232321232323232323232323232323232|-1Pc57.M eUo7.M 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0|15e5", "Asia/Amman|LMT EET EEST|-2n.I -20 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1yW2n.I 1HiMn.I KL0 1oN0 11b0 1oN0 11b0 1pd0 1dz0 1cp0 11b0 1op0 11b0 fO10 1db0 1e10 1cL0 1cN0 1cL0 1cN0 1fz0 1pd0 10n0 1ld0 14n0 1hB0 15b0 1ip0 19X0 1cN0 1cL0 1cN0 17b0 1ld0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1So0 y00 1fc0 1dc0 1co0 1dc0 1cM0 1cM0 1cM0 1o00 11A0 1lc0 17c0 1cM0 1cM0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 4bX0 Dd0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0|25e5", "Asia/Anadyr|LMT +12 +13 +14 +11|-bN.U -c0 -d0 -e0 -b0|01232121212121212121214121212121212121212121212121212121212141|-1PcbN.U eUnN.U 23CL0 1db0 2q10 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|13e3", "Asia/Aqtau|LMT +04 +05 +06|-3l.4 -40 -50 -60|012323232323232323232123232312121212121212121212|-1Pc3l.4 eUnl.4 24PX0 2pX0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0|15e4", "Asia/Aqtobe|LMT +04 +05 +06|-3M.E -40 -50 -60|0123232323232323232321232323232323232323232323232|-1Pc3M.E eUnM.E 23CL0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0|27e4", "Asia/Ashgabat|LMT +04 +05 +06|-3R.w -40 -50 -60|0123232323232323232323212|-1Pc3R.w eUnR.w 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0|41e4", "Asia/Atyrau|LMT +03 +05 +06 +04|-3r.I -30 -50 -60 -40|01232323232323232323242323232323232324242424242|-1Pc3r.I eUor.I 24PW0 2pX0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 2sp0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0", "Asia/Baghdad|BMT +03 +04|-2V.A -30 -40|012121212121212121212121212121212121212121212121212121|-26BeV.A 2ACnV.A 11b0 1cp0 1dz0 1dd0 1db0 1cN0 1cp0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1de0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0 1dc0 1dc0 1cM0 1dc0 1cM0 1dc0 1cM0 1dc0|66e5", "Asia/Qatar|LMT +04 +03|-3q.8 -40 -30|012|-21Jfq.8 27BXq.8|96e4", "Asia/Baku|LMT +03 +04 +05|-3j.o -30 -40 -50|01232323232323232323232123232323232323232323232323232323232323232|-1Pc3j.o 1jUoj.o WCL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 1cM0 9Je0 1o00 11z0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00|27e5", "Asia/Bangkok|BMT +07|-6G.4 -70|01|-218SG.4|15e6", "Asia/Barnaul|LMT +06 +07 +08|-5z -60 -70 -80|0123232323232323232323212323232321212121212121212121212121212121212|-21S5z pCnz 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 p90 LE0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0", "Asia/Beirut|EET EEST|-20 -30|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-21aq0 1on0 1410 1db0 19B0 1in0 1ip0 WL0 1lQp0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 11b0 q6N0 En0 1oN0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 11b0 1op0 11b0 dA10 17b0 1iN0 17b0 1iN0 17b0 1iN0 17b0 1vB0 SL0 1mp0 13z0 1iN0 17b0 1iN0 17b0 1jd0 12n0 1a10 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0|22e5", "Asia/Bishkek|LMT +05 +06 +07|-4W.o -50 -60 -70|012323232323232323232321212121212121212121212121212|-1Pc4W.o eUnW.o 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2e00 1tX0 17b0 1ip0 17b0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1cPu 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0|87e4", "Asia/Brunei|LMT +0730 +08|-7D.E -7u -80|012|-1KITD.E gDc9.E|42e4", "Asia/Kolkata|MMT IST +0630|-5l.a -5u -6u|012121|-2zOtl.a 1r2LP.a 1un0 HB0 7zX0|15e6", "Asia/Chita|LMT +08 +09 +10|-7x.Q -80 -90 -a0|012323232323232323232321232323232323232323232323232323232323232312|-21Q7x.Q pAnx.Q 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3re0|33e4", "Asia/Choibalsan|LMT +07 +08 +10 +09|-7C -70 -80 -a0 -90|0123434343434343434343434343434343434343434343424242|-2APHC 2UkoC cKn0 1da0 1dd0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 6hD0 11z0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 3Db0 h1f0 1cJ0 1cP0 1cJ0|38e3", "Asia/Shanghai|CST CDT|-80 -90|01010101010101010|-1c1I0 LX0 16p0 1jz0 1Myp0 Rb0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0|23e6", "Asia/Colombo|MMT +0530 +06 +0630|-5j.w -5u -60 -6u|01231321|-2zOtj.w 1rFbN.w 1zzu 7Apu 23dz0 11zu n3cu|22e5", "Asia/Dhaka|HMT +0630 +0530 +06 +07|-5R.k -6u -5u -60 -70|0121343|-18LFR.k 1unn.k HB0 m6n0 2kxbu 1i00|16e6", "Asia/Damascus|LMT EET EEST|-2p.c -20 -30|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-21Jep.c Hep.c 17b0 1ip0 17b0 1ip0 17b0 1ip0 19X0 1xRB0 11X0 1oN0 10L0 1pB0 11b0 1oN0 10L0 1mp0 13X0 1oN0 11b0 1pd0 11b0 1oN0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 11b0 1oN0 11b0 1oN0 11b0 1pd0 11b0 1oN0 Nb0 1AN0 Nb0 bcp0 19X0 1gp0 19X0 3ld0 1xX0 Vd0 1Bz0 Sp0 1vX0 10p0 1dz0 1cN0 1cL0 1db0 1db0 1g10 1an0 1ap0 1db0 1fd0 1db0 1cN0 1db0 1dd0 1db0 1cp0 1dz0 1c10 1dX0 1cN0 1db0 1dd0 1db0 1cN0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1db0 1cN0 1db0 1cN0 19z0 1fB0 1qL0 11B0 1on0 Wp0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 1qL0 WN0 1qL0|26e5", "Asia/Dili|LMT +08 +09|-8m.k -80 -90|01212|-2le8m.k 1dnXm.k 1nfA0 Xld0|19e4", "Asia/Dubai|LMT +04|-3F.c -40|01|-21JfF.c|39e5", "Asia/Dushanbe|LMT +05 +06 +07|-4z.c -50 -60 -70|012323232323232323232321|-1Pc4z.c eUnz.c 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2hB0|76e4", "Asia/Famagusta|LMT EET EEST +03|-2f.M -20 -30 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212312121212121212121212121212121212121212121|-1Vc2f.M 2a3cf.M 1cL0 1qp0 Xz0 19B0 19X0 1fB0 1db0 1cp0 1cL0 1fB0 19X0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1o30 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 15U0 2Ks0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "Asia/Gaza|EET EEST IST IDT|-20 -30 -20 -30|010101010101010101010101010101012323232323232323232323232320101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-1c2q0 5Rb0 10r0 1px0 10N0 1pz0 16p0 1jB0 16p0 1jx0 pBd0 Vz0 1oN0 11b0 1oO0 10N0 1pz0 10N0 1pb0 10N0 1pb0 10N0 1pb0 10N0 1pz0 10N0 1pb0 10N0 1pb0 11d0 1oL0 dW0 hfB0 Db0 1fB0 Rb0 npB0 11z0 1C10 IL0 1s10 10n0 1o10 WL0 1zd0 On0 1ld0 11z0 1o10 14n0 1o10 14n0 1nd0 12n0 1nd0 Xz0 1q10 12n0 M10 C00 17c0 1io0 17c0 1io0 17c0 1o00 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 17c0 1io0 18N0 1bz0 19z0 1gp0 1610 1iL0 11z0 1o10 14o0 1lA1 SKX 1xd1 MKX 1AN0 1a00 1fA0 1cL0 1cN0 1nX0 1210 1nz0 1220 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0|18e5", "Asia/Hebron|EET EEST IST IDT|-20 -30 -20 -30|01010101010101010101010101010101232323232323232323232323232010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-1c2q0 5Rb0 10r0 1px0 10N0 1pz0 16p0 1jB0 16p0 1jx0 pBd0 Vz0 1oN0 11b0 1oO0 10N0 1pz0 10N0 1pb0 10N0 1pb0 10N0 1pb0 10N0 1pz0 10N0 1pb0 10N0 1pb0 11d0 1oL0 dW0 hfB0 Db0 1fB0 Rb0 npB0 11z0 1C10 IL0 1s10 10n0 1o10 WL0 1zd0 On0 1ld0 11z0 1o10 14n0 1o10 14n0 1nd0 12n0 1nd0 Xz0 1q10 12n0 M10 C00 17c0 1io0 17c0 1io0 17c0 1o00 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 17c0 1io0 18N0 1bz0 19z0 1gp0 1610 1iL0 12L0 1mN0 14o0 1lc0 Tb0 1xd1 MKX bB0 cn0 1cN0 1a00 1fA0 1cL0 1cN0 1nX0 1210 1nz0 1220 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1qL0|25e4", "Asia/Ho_Chi_Minh|LMT PLMT +07 +08 +09|-76.E -76.u -70 -80 -90|0123423232|-2yC76.E bK00.a 1h7b6.u 5lz0 18o0 3Oq0 k5b0 aW00 BAM0|90e5", "Asia/Hong_Kong|LMT HKT HKST JST|-7A.G -80 -90 -90|0121312121212121212121212121212121212121212121212121212121212121212121|-2CFHA.G 1sEP6.G 1cL0 ylu 93X0 1qQu 1tX0 Rd0 1In0 NB0 1cL0 11B0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1kL0 14N0 1nX0 U10 1tz0 U10 1wn0 Rd0 1wn0 U10 1tz0 U10 1tz0 U10 1tz0 U10 1wn0 Rd0 1wn0 Rd0 1wn0 U10 1tz0 U10 1tz0 17d0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 s10 1Vz0 1cN0 1cL0 1cN0 1cL0 6fd0 14n0|73e5", "Asia/Hovd|LMT +06 +07 +08|-66.A -60 -70 -80|012323232323232323232323232323232323232323232323232|-2APG6.A 2Uko6.A cKn0 1db0 1dd0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 6hD0 11z0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 kEp0 1cJ0 1cP0 1cJ0|81e3", "Asia/Irkutsk|IMT +07 +08 +09|-6V.5 -70 -80 -90|01232323232323232323232123232323232323232323232323232323232323232|-21zGV.5 pjXV.5 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|60e4", "Europe/Istanbul|IMT EET EEST +04 +03|-1U.U -20 -30 -40 -30|012121212121212121212121212121212121212121212121212121234343434342121212121212121212121212121212121212121212121212121212121212124|-2ogNU.U dzzU.U 11b0 8tB0 1on0 1410 1db0 19B0 1in0 3Rd0 Un0 1oN0 11b0 zSp0 CL0 mN0 1Vz0 1gN0 1pz0 5Rd0 1fz0 1yp0 ML0 1kp0 17b0 1ip0 17b0 1fB0 19X0 1jB0 18L0 1ip0 17z0 qdd0 xX0 3S10 Tz0 dA10 11z0 1o10 11z0 1qN0 11z0 1ze0 11B0 WM0 1qO0 WI0 1nX0 1rB0 10L0 11B0 1in0 17d0 1in0 2pX0 19E0 1fU0 16Q0 1iI0 16Q0 1iI0 1Vd0 pb0 3Kp0 14o0 1de0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1a00 1fA0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WO0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 Xc0 1qo0 WM0 1qM0 11A0 1o00 1200 1nA0 11A0 1tA0 U00 15w0|13e6", "Asia/Jakarta|BMT +0720 +0730 +09 +08 WIB|-77.c -7k -7u -90 -80 -70|01232425|-1Q0Tk luM0 mPzO 8vWu 6kpu 4PXu xhcu|31e6", "Asia/Jayapura|LMT +09 +0930 WIT|-9m.M -90 -9u -90|0123|-1uu9m.M sMMm.M L4nu|26e4", "Asia/Jerusalem|JMT IST IDT IDDT|-2k.E -20 -30 -40|01212121212132121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-26Bek.E SyMk.E 5Rb0 10r0 1px0 10N0 1pz0 16p0 1jB0 16p0 1jx0 3LB0 Em0 or0 1cn0 1dB0 16n0 10O0 1ja0 1tC0 14o0 1cM0 1a00 11A0 1Na0 An0 1MP0 AJ0 1Kp0 LC0 1oo0 Wl0 EQN0 Db0 1fB0 Rb0 npB0 11z0 1C10 IL0 1s10 10n0 1o10 WL0 1zd0 On0 1ld0 11z0 1o10 14n0 1o10 14n0 1nd0 12n0 1nd0 Xz0 1q10 12n0 1hB0 1dX0 1ep0 1aL0 1eN0 17X0 1nf0 11z0 1tB0 19W0 1e10 17b0 1ep0 1gL0 18N0 1fz0 1eN0 17b0 1gq0 1gn0 19d0 1dz0 1c10 17X0 1hB0 1gn0 19d0 1dz0 1c10 17X0 1kp0 1dz0 1c10 1aL0 1eN0 1oL0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0 10N0 1rz0 W10 1rz0 W10 1rz0 W10 1rz0 10N0 1oL0 10N0 1oL0|81e4", "Asia/Kabul|+04 +0430|-40 -4u|01|-10Qs0|46e5", "Asia/Kamchatka|LMT +11 +12 +13|-ay.A -b0 -c0 -d0|012323232323232323232321232323232323232323232323232323232323212|-1SLKy.A ivXy.A 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|18e4", "Asia/Karachi|LMT +0530 +0630 +05 PKT PKST|-4s.c -5u -6u -50 -50 -60|012134545454|-2xoss.c 1qOKW.c 7zX0 eup0 LqMu 1fy00 1cL0 dK10 11b0 1610 1jX0|24e6", "Asia/Urumqi|LMT +06|-5O.k -60|01|-1GgtO.k|32e5", "Asia/Kathmandu|LMT +0530 +0545|-5F.g -5u -5J|012|-21JhF.g 2EGMb.g|12e5", "Asia/Khandyga|LMT +08 +09 +10 +11|-92.d -80 -90 -a0 -b0|0123232323232323232323212323232323232323232323232343434343434343432|-21Q92.d pAp2.d 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 qK0 yN0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 17V0 7zD0|66e2", "Asia/Krasnoyarsk|LMT +06 +07 +08|-6b.q -60 -70 -80|01232323232323232323232123232323232323232323232323232323232323232|-21Hib.q prAb.q 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|10e5", "Asia/Kuala_Lumpur|SMT +07 +0720 +0730 +09 +08|-6T.p -70 -7k -7u -90 -80|0123435|-2Bg6T.p 17anT.p l5XE 17bO 8Fyu 1so1u|71e5", "Asia/Kuching|LMT +0730 +08 +0820 +09|-7l.k -7u -80 -8k -90|0123232323232323242|-1KITl.k gDbP.k 6ynu AnE 1O0k AnE 1NAk AnE 1NAk AnE 1NAk AnE 1O0k AnE 1NAk AnE pAk 8Fz0|13e4", "Asia/Macau|LMT CST CDT|-7y.k -80 -90|012121212121212121212121212121212121212121|-2le80 1XO3u 1wn0 Rd0 1wn0 R9u 1wqu U10 1tz0 TVu 1tz0 17gu 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cJu 1cL0 1cN0 1fz0 1cN0 1cOu 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cJu 1cL0 1cN0 1fz0 1cN0 1cL0|57e4", "Asia/Magadan|LMT +10 +11 +12|-a3.c -a0 -b0 -c0|012323232323232323232321232323232323232323232323232323232323232312|-1Pca3.c eUo3.c 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3Cq0|95e3", "Asia/Makassar|LMT MMT +08 +09 WITA|-7V.A -7V.A -80 -90 -80|01234|-21JjV.A vfc0 myLV.A 8ML0|15e5", "Asia/Manila|+08 +09|-80 -90|010101010|-1kJI0 AL0 cK10 65X0 mXB0 vX0 VK10 1db0|24e6", "Asia/Nicosia|LMT EET EEST|-2d.s -20 -30|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1Vc2d.s 2a3cd.s 1cL0 1qp0 Xz0 19B0 19X0 1fB0 1db0 1cp0 1cL0 1fB0 19X0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1o30 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|32e4", "Asia/Novokuznetsk|LMT +06 +07 +08|-5M.M -60 -70 -80|012323232323232323232321232323232323232323232323232323232323212|-1PctM.M eULM.M 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|55e4", "Asia/Novosibirsk|LMT +06 +07 +08|-5v.E -60 -70 -80|0123232323232323232323212323212121212121212121212121212121212121212|-21Qnv.E pAFv.E 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 ml0 Os0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 4eN0|15e5", "Asia/Omsk|LMT +05 +06 +07|-4R.u -50 -60 -70|01232323232323232323232123232323232323232323232323232323232323232|-224sR.u pMLR.u 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|12e5", "Asia/Oral|LMT +03 +05 +06 +04|-3p.o -30 -50 -60 -40|01232323232323232424242424242424242424242424242|-1Pc3p.o eUop.o 23CK0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 1cM0 1cM0 IM0 1EM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0|27e4", "Asia/Pontianak|LMT PMT +0730 +09 +08 WITA WIB|-7h.k -7h.k -7u -90 -80 -80 -70|012324256|-2ua7h.k XE00 munL.k 8Rau 6kpu 4PXu xhcu Wqnu|23e4", "Asia/Pyongyang|LMT KST JST KST|-8n -8u -90 -90|012313|-2um8n 97XR 1lTzu 2Onc0 6BAu|29e5", "Asia/Qyzylorda|LMT +04 +05 +06|-4l.Q -40 -50 -60|0123232323232323232323232323232323232323232323|-1Pc4l.Q eUol.Q 23CL0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 3ao0 1EM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0|73e4", "Asia/Rangoon|RMT +0630 +09|-6o.L -6u -90|0121|-21Jio.L SmnS.L 7j9u|48e5", "Asia/Sakhalin|LMT +09 +11 +12 +10|-9u.M -90 -b0 -c0 -a0|01232323232323232323232423232323232424242424242424242424242424242|-2AGVu.M 1BoMu.M 1qFa0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 2pB0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0|58e4", "Asia/Samarkand|LMT +04 +05 +06|-4r.R -40 -50 -60|01232323232323232323232|-1Pc4r.R eUor.R 23CL0 3Db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0|36e4", "Asia/Seoul|LMT KST JST KST KDT KDT|-8r.Q -8u -90 -90 -9u -a0|0123141414141414135353|-2um8r.Q 97XV.Q 1m1zu kKo0 2I0u OL0 1FB0 Rb0 1qN0 TX0 1tB0 TX0 1tB0 TX0 1tB0 TX0 2ap0 12FBu 11A0 1o00 11A0|23e6", "Asia/Srednekolymsk|LMT +10 +11 +12|-ae.Q -a0 -b0 -c0|01232323232323232323232123232323232323232323232323232323232323232|-1Pcae.Q eUoe.Q 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|35e2", "Asia/Taipei|CST JST CDT|-80 -90 -90|01020202020202020202020202020202020202020|-1iw80 joM0 1yo0 Tz0 1ip0 1jX0 1cN0 11b0 1oN0 11b0 1oN0 11b0 1oN0 11b0 10N0 1BX0 10p0 1pz0 10p0 1pz0 10p0 1db0 1dd0 1db0 1cN0 1db0 1cN0 1db0 1cN0 1db0 1BB0 ML0 1Bd0 ML0 uq10 1db0 1cN0 1db0 97B0 AL0|74e5", "Asia/Tashkent|LMT +05 +06 +07|-4B.b -50 -60 -70|012323232323232323232321|-1Pc4B.b eUnB.b 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0|23e5", "Asia/Tbilisi|TBMT +03 +04 +05|-2X.b -30 -40 -50|0123232323232323232323212121232323232323232323212|-1Pc2X.b 1jUnX.b WCL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 1cK0 1cL0 1cN0 1cL0 1cN0 2pz0 1cL0 1fB0 3Nz0 11B0 1nX0 11B0 1qL0 WN0 1qL0 WN0 1qL0 11B0 1nX0 11B0 1nX0 11B0 An0 Os0 WM0|11e5", "Asia/Tehran|LMT TMT +0330 +04 +05 +0430|-3p.I -3p.I -3u -40 -50 -4u|01234325252525252525252525252525252525252525252525252525252525252525252525252525252525252525252525252|-2btDp.I 1d3c0 1huLT.I TXu 1pz0 sN0 vAu 1cL0 1dB0 1en0 pNB0 UL0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 64p0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0 1cN0 1dz0 1cp0 1dz0 1cp0 1dz0 1cp0 1dz0|14e6", "Asia/Thimphu|LMT +0530 +06|-5W.A -5u -60|012|-Su5W.A 1BGMs.A|79e3", "Asia/Tokyo|JST JDT|-90 -a0|010101010|-QJJ0 Rb0 1ld0 14n0 1zd0 On0 1zd0 On0|38e6", "Asia/Tomsk|LMT +06 +07 +08|-5D.P -60 -70 -80|0123232323232323232323212323232323232323232323212121212121212121212|-21NhD.P pxzD.P 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 co0 1bB0 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3Qp0|10e5", "Asia/Ulaanbaatar|LMT +07 +08 +09|-77.w -70 -80 -90|012323232323232323232323232323232323232323232323232|-2APH7.w 2Uko7.w cKn0 1db0 1dd0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 6hD0 11z0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 kEp0 1cJ0 1cP0 1cJ0|12e5", "Asia/Ust-Nera|LMT +08 +09 +12 +11 +10|-9w.S -80 -90 -c0 -b0 -a0|012343434343434343434345434343434343434343434343434343434343434345|-21Q9w.S pApw.S 23CL0 1d90 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 17V0 7zD0|65e2", "Asia/Vladivostok|LMT +09 +10 +11|-8L.v -90 -a0 -b0|01232323232323232323232123232323232323232323232323232323232323232|-1SJIL.v itXL.v 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|60e4", "Asia/Yakutsk|LMT +08 +09 +10|-8C.W -80 -90 -a0|01232323232323232323232123232323232323232323232323232323232323232|-21Q8C.W pAoC.W 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|28e4", "Asia/Yekaterinburg|LMT PMT +04 +05 +06|-42.x -3J.5 -40 -50 -60|012343434343434343434343234343434343434343434343434343434343434343|-2ag42.x 7mQh.s qBvJ.5 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|14e5", "Asia/Yerevan|LMT +03 +04 +05|-2W -30 -40 -50|0123232323232323232323212121212323232323232323232323232323232|-1Pc2W 1jUnW WCL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 2pB0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 4RX0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0|13e5", "Atlantic/Azores|HMT -02 -01 +00 WET|1S.w 20 10 0 0|01212121212121212121212121212121212121212121232123212321232121212121212121212121212121212121212121232323232323232323232323232323234323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-2ldW0 aPX0 Sp0 LX0 1vc0 Tc0 1uM0 SM0 1vc0 Tc0 1vc0 SM0 1vc0 6600 1co0 3E00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 3I00 17c0 1cM0 1cM0 3Fc0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 1tA0 1cM0 1dc0 1400 gL0 IM0 s10 U00 dX0 Rc0 pd0 Rc0 gL0 Oo0 pd0 Rc0 gL0 Oo0 pd0 14o0 1cM0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 3Co0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 qIl0 1cM0 1fA0 1cM0 1cM0 1cN0 1cL0 1cN0 1cM0 1cM0 1cM0 1cM0 1cN0 1cL0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cL0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|25e4", "Atlantic/Bermuda|LMT AST ADT|4j.i 40 30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1BnRE.G 1LTbE.G 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|65e3", "Atlantic/Canary|LMT -01 WET WEST|11.A 10 0 -10|01232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-1UtaW.o XPAW.o 1lAK0 1a10 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|54e4", "Atlantic/Cape_Verde|LMT -02 -01|1y.4 20 10|01212|-2ldW0 1eEo0 7zX0 1djf0|50e4", "Atlantic/Faroe|LMT WET WEST|r.4 0 -10|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2uSnw.U 2Wgow.U 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|49e3", "Atlantic/Madeira|FMT -01 +00 +01 WET WEST|17.A 10 0 -10 0 -10|01212121212121212121212121212121212121212121232123212321232121212121212121212121212121212121212121454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-2ldX0 aPX0 Sp0 LX0 1vc0 Tc0 1uM0 SM0 1vc0 Tc0 1vc0 SM0 1vc0 6600 1co0 3E00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 3I00 17c0 1cM0 1cM0 3Fc0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 1tA0 1cM0 1dc0 1400 gL0 IM0 s10 U00 dX0 Rc0 pd0 Rc0 gL0 Oo0 pd0 Rc0 gL0 Oo0 pd0 14o0 1cM0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 3Co0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 qIl0 1cM0 1fA0 1cM0 1cM0 1cN0 1cL0 1cN0 1cM0 1cM0 1cM0 1cM0 1cN0 1cL0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|27e4", "Atlantic/Reykjavik|LMT -01 +00 GMT|1s 10 0 0|012121212121212121212121212121212121212121212121212121212121212121213|-2uWmw mfaw 1Bd0 ML0 1LB0 Cn0 1LB0 3fX0 C10 HrX0 1cO0 LB0 1EL0 LA0 1C00 Oo0 1wo0 Rc0 1wo0 Rc0 1wo0 Rc0 1zc0 Oo0 1zc0 14o0 1lc0 14o0 1lc0 14o0 1o00 11A0 1lc0 14o0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1lc0 14o0 1o00 14o0|12e4", "Atlantic/South_Georgia|-02|20|0||30", "Atlantic/Stanley|SMT -04 -03 -02|3P.o 40 30 20|012121212121212323212121212121212121212121212121212121212121212121212|-2kJw8.A 12bA8.A 19X0 1fB0 19X0 1ip0 19X0 1fB0 19X0 1fB0 19X0 1fB0 Cn0 1Cc10 WL0 1qL0 U10 1tz0 2mN0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1tz0 U10 1tz0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1tz0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qL0 WN0 1qN0 U10 1wn0 Rd0 1wn0 U10 1tz0 U10 1tz0 U10 1tz0 U10 1tz0 U10 1wn0 U10 1tz0 U10 1tz0 U10|21e2", "Australia/Sydney|AEST AEDT|-a0 -b0|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 14o0 1o00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1tA0 WM0 1tA0 U00 1tA0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 11A0 1o00 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|40e5", "Australia/Adelaide|ACST ACDT|-9u -au|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lt xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 Oo0 1zc0 WM0 1qM0 Rc0 1zc0 U00 1tA0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|11e5", "Australia/Brisbane|AEST AEDT|-a0 -b0|01010101010101010|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 H1A0 Oo0 1zc0 Oo0 1zc0 Oo0|20e5", "Australia/Broken_Hill|ACST ACDT|-9u -au|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lt xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 14o0 1o00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1tA0 WM0 1tA0 U00 1tA0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|18e3", "Australia/Currie|AEST AEDT|-a0 -b0|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-29E80 19X0 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1qM0 WM0 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1wo0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 11A0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 11A0 1o00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|746", "Australia/Darwin|ACST ACDT|-9u -au|010101010|-293lt xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0|12e4", "Australia/Eucla|+0845 +0945|-8J -9J|0101010101010101010|-293kI xcX 10jd0 yL0 1cN0 1cL0 1gSp0 Oo0 l5A0 Oo0 iJA0 G00 zU00 IM0 1qM0 11A0 1o00 11A0|368", "Australia/Hobart|AEST AEDT|-a0 -b0|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-29E80 19X0 10jd0 yL0 1cN0 1cL0 1fB0 19X0 VfB0 1cM0 1o00 Rc0 1wo0 Rc0 1wo0 U00 1wo0 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 11A0 1qM0 WM0 1qM0 Oo0 1zc0 Oo0 1zc0 Oo0 1wo0 WM0 1tA0 WM0 1tA0 U00 1tA0 U00 1tA0 11A0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 11A0 1o00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|21e4", "Australia/Lord_Howe|AEST +1030 +1130 +11|-a0 -au -bu -b0|0121212121313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313|raC0 1zdu Rb0 1zd0 On0 1zd0 On0 1zd0 On0 1zd0 TXu 1qMu WLu 1tAu WLu 1tAu TXu 1tAu Onu 1zcu Onu 1zcu Onu 1zcu Rbu 1zcu Onu 1zcu Onu 1zcu 11zu 1o0u 11zu 1o0u 11zu 1o0u 11zu 1qMu WLu 11Au 1nXu 1qMu 11zu 1o0u 11zu 1o0u 11zu 1qMu WLu 1qMu 11zu 1o0u WLu 1qMu 14nu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1fzu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1cMu 1cLu 1fAu 1cLu 1cMu 1cLu 1cMu|347", "Australia/Lindeman|AEST AEDT|-a0 -b0|010101010101010101010|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 H1A0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0|10", "Australia/Melbourne|AEST AEDT|-a0 -b0|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101|-293lX xcX 10jd0 yL0 1cN0 1cL0 1fB0 19X0 17c10 LA0 1C00 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 U00 1qM0 WM0 1qM0 11A0 1tA0 U00 1tA0 U00 1tA0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 11A0 1o00 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 14o0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0|39e5", "Australia/Perth|AWST AWDT|-80 -90|0101010101010101010|-293jX xcX 10jd0 yL0 1cN0 1cL0 1gSp0 Oo0 l5A0 Oo0 iJA0 G00 zU00 IM0 1qM0 11A0 1o00 11A0|18e5", "CET|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 16M0 1gMM0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "Pacific/Easter|EMT -07 -06 -05|7h.s 70 60 50|012121212121212121212121212123232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323|-1uSgG.w 1s4IG.w WL0 1zd0 On0 1ip0 11z0 1o10 11z0 1qN0 WL0 1ld0 14n0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 2pA0 11z0 1o10 11z0 1qN0 WL0 1qN0 WL0 1qN0 1cL0 1cN0 11z0 1o10 11z0 1qN0 WL0 1fB0 19X0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1ip0 1fz0 1fB0 11z0 1qN0 WL0 1qN0 WL0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 17b0 1ip0 11z0 1o10 19X0 1fB0 1nX0 G10 1EL0 Op0 1zb0 Rd0 1wn0 Rd0 46n0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Dd0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0 1Nb0 Ap0|30e2", "CST6CDT|CST CDT CWT CPT|60 50 50 50|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261s0 1nX0 11B0 1nX0 SgN0 8x30 iw0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "EET|EET EEST|-20 -30|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|hDB0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "Europe/Dublin|DMT IST GMT BST IST|p.l -y.D 0 -10 -10|01232323232324242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242424242|-2ax9y.D Rc0 1fzy.D 14M0 1fc0 1g00 1co0 1dc0 1co0 1oo0 1400 1dc0 19A0 1io0 1io0 WM0 1o00 14o0 1o00 17c0 1io0 17c0 1fA0 1a00 1lc0 17c0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1cM0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1io0 1qM0 Dc0 g600 14o0 1wo0 17c0 1io0 11A0 1o00 17c0 1fA0 1a00 1fA0 1cM0 1fA0 1a00 17c0 1fA0 1a00 1io0 17c0 1lc0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1a00 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1tA0 IM0 90o0 U00 1tA0 U00 1tA0 U00 1tA0 U00 1tA0 WM0 1qM0 WM0 1qM0 WM0 1tA0 U00 1tA0 U00 1tA0 11z0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 14o0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "EST|EST|50|0|", "EST5EDT|EST EDT EWT EPT|50 40 40 40|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261t0 1nX0 11B0 1nX0 SgN0 8x40 iv0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "Etc/GMT-0|GMT|0|0|", "Etc/GMT-1|+01|-10|0|", "Pacific/Port_Moresby|+10|-a0|0||25e4", "Pacific/Pohnpei|+11|-b0|0||34e3", "Pacific/Tarawa|+12|-c0|0||29e3", "Etc/GMT-13|+13|-d0|0|", "Etc/GMT-14|+14|-e0|0|", "Etc/GMT-2|+02|-20|0|", "Etc/GMT-3|+03|-30|0|", "Etc/GMT-4|+04|-40|0|", "Etc/GMT-5|+05|-50|0|", "Etc/GMT-6|+06|-60|0|", "Indian/Christmas|+07|-70|0||21e2", "Etc/GMT-8|+08|-80|0|", "Pacific/Palau|+09|-90|0||21e3", "Etc/GMT+1|-01|10|0|", "Etc/GMT+10|-10|a0|0|", "Etc/GMT+11|-11|b0|0|", "Etc/GMT+12|-12|c0|0|", "Etc/GMT+3|-03|30|0|", "Etc/GMT+4|-04|40|0|", "Etc/GMT+5|-05|50|0|", "Etc/GMT+6|-06|60|0|", "Etc/GMT+7|-07|70|0|", "Etc/GMT+8|-08|80|0|", "Etc/GMT+9|-09|90|0|", "Etc/UCT|UCT|0|0|", "Etc/UTC|UTC|0|0|", "Europe/Amsterdam|AMT NST +0120 +0020 CEST CET|-j.w -1j.w -1k -k -20 -10|010101010101010101010101010101010101010101012323234545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545|-2aFcj.w 11b0 1iP0 11A0 1io0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1co0 1io0 1yo0 Pc0 1a00 1fA0 1Bc0 Mo0 1tc0 Uo0 1tA0 U00 1uo0 W00 1s00 VA0 1so0 Vc0 1sM0 UM0 1wo0 Rc0 1u00 Wo0 1rA0 W00 1s00 VA0 1sM0 UM0 1w00 fV0 BCX.w 1tA0 U00 1u00 Wo0 1sm0 601k WM0 1fA0 1cM0 1cM0 1cM0 16M0 1gMM0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|16e5", "Europe/Andorra|WET CET CEST|0 -10 -20|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-UBA0 1xIN0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|79e3", "Europe/Astrakhan|LMT +03 +04 +05|-3c.c -30 -40 -50|012323232323232323212121212121212121212121212121212121212121212|-1Pcrc.c eUMc.c 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0", "Europe/Athens|AMT EET EEST CEST CET|-1y.Q -20 -30 -20 -10|012123434121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2a61x.Q CNbx.Q mn0 kU10 9b0 3Es0 Xa0 1fb0 1dd0 k3X0 Nz0 SCp0 1vc0 SO0 1cM0 1a00 1ao0 1fc0 1a10 1fG0 1cg0 1dX0 1bX0 1cQ0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|35e5", "Europe/London|GMT BST BDST|0 -10 -20|0101010101010101010101010101010101010101010101010121212121210101210101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2axa0 Rc0 1fA0 14M0 1fc0 1g00 1co0 1dc0 1co0 1oo0 1400 1dc0 19A0 1io0 1io0 WM0 1o00 14o0 1o00 17c0 1io0 17c0 1fA0 1a00 1lc0 17c0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1cM0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1io0 1qM0 Dc0 2Rz0 Dc0 1zc0 Oo0 1zc0 Rc0 1wo0 17c0 1iM0 FA0 xB0 1fA0 1a00 14o0 bb0 LA0 xB0 Rc0 1wo0 11A0 1o00 17c0 1fA0 1a00 1fA0 1cM0 1fA0 1a00 17c0 1fA0 1a00 1io0 17c0 1lc0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1a00 1qM0 WM0 1qM0 11A0 1o00 WM0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1tA0 IM0 90o0 U00 1tA0 U00 1tA0 U00 1tA0 U00 1tA0 WM0 1qM0 WM0 1qM0 WM0 1tA0 U00 1tA0 U00 1tA0 11z0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1o00 14o0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|10e6", "Europe/Belgrade|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-19RC0 3IP0 WM0 1fA0 1cM0 1cM0 1rc0 Qo0 1vmo0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Berlin|CET CEST CEMT|-10 -20 -30|01010101010101210101210101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 kL0 Nc0 m10 WM0 1ao0 1cp0 dX0 jz0 Dd0 1io0 17c0 1fA0 1a00 1ehA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|41e5", "Europe/Prague|CET CEST GMT|-10 -20 0|01010101010101010201010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 1cM0 1qM0 11c0 mp0 xA0 mn0 17c0 1io0 17c0 1fc0 1ao0 1bNc0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|13e5", "Europe/Brussels|WET CET CEST WEST|0 -10 -20 -10|0121212103030303030303030303030303030303030303030303212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2ehc0 3zX0 11c0 1iO0 11A0 1o00 11A0 my0 Ic0 1qM0 Rc0 1EM0 UM0 1u00 10o0 1io0 1io0 17c0 1a00 1fA0 1cM0 1cM0 1io0 17c0 1fA0 1a00 1io0 1a30 1io0 17c0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 y00 5Wn0 WM0 1fA0 1cM0 16M0 1iM0 16M0 1C00 Uo0 1eeo0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|21e5", "Europe/Bucharest|BMT EET EEST|-1I.o -20 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1xApI.o 20LI.o RA0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1Axc0 On0 1fA0 1a10 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cK0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cL0 1cN0 1cL0 1fB0 1nX0 11E0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|19e5", "Europe/Budapest|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1ip0 17b0 1op0 1tb0 Q2m0 3Ne0 WM0 1fA0 1cM0 1cM0 1oJ0 1dc0 1030 1fA0 1cM0 1cM0 1cM0 1cM0 1fA0 1a00 1iM0 1fA0 8Ha0 Rb0 1wN0 Rb0 1BB0 Lz0 1C20 LB0 SNX0 1a10 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|17e5", "Europe/Zurich|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-19Lc0 11A0 1o00 11A0 1xG10 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|38e4", "Europe/Chisinau|CMT BMT EET EEST CEST CET MSK MSD|-1T -1I.o -20 -30 -20 -10 -30 -40|012323232323232323234545467676767676767676767323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232|-26jdT wGMa.A 20LI.o RA0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 27A0 2en0 39g0 WM0 1fA0 1cM0 V90 1t7z0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 gL0 WO0 1cM0 1cM0 1cK0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1nX0 11D0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|67e4", "Europe/Copenhagen|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2azC0 Tz0 VuO0 60q0 WM0 1fA0 1cM0 1cM0 1cM0 S00 1HA0 Nc0 1C00 Dc0 1Nc0 Ao0 1h5A0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Gibraltar|GMT BST BDST CET CEST|0 -10 -20 -10 -20|010101010101010101010101010101010101010101010101012121212121010121010101010101010101034343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-2axa0 Rc0 1fA0 14M0 1fc0 1g00 1co0 1dc0 1co0 1oo0 1400 1dc0 19A0 1io0 1io0 WM0 1o00 14o0 1o00 17c0 1io0 17c0 1fA0 1a00 1lc0 17c0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1cM0 1io0 17c0 1fA0 1a00 1io0 17c0 1io0 17c0 1fA0 1a00 1io0 1qM0 Dc0 2Rz0 Dc0 1zc0 Oo0 1zc0 Rc0 1wo0 17c0 1iM0 FA0 xB0 1fA0 1a00 14o0 bb0 LA0 xB0 Rc0 1wo0 11A0 1o00 17c0 1fA0 1a00 1fA0 1cM0 1fA0 1a00 17c0 1fA0 1a00 1io0 17c0 1lc0 17c0 1fA0 10Jz0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|30e3", "Europe/Helsinki|HMT EET EEST|-1D.N -20 -30|0121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-1WuND.N OULD.N 1dA0 1xGq0 1cM0 1cM0 1cM0 1cN0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Kaliningrad|CET CEST CET CEST MSK MSD EEST EET +03|-10 -20 -20 -30 -30 -40 -30 -20 -30|0101010101010232454545454545454546767676767676767676767676767676767676767676787|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 Am0 Lb0 1en0 op0 1pNz0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|44e4", "Europe/Kiev|KMT EET MSK CEST CET MSD EEST|-22.4 -20 -30 -20 -10 -40 -30|0123434252525252525252525256161616161616161616161616161616161616161616161616161616161616161616161616161616161616161616161|-1Pc22.4 eUo2.4 rnz0 2Hg0 WM0 1fA0 da0 1v4m0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 Db0 3220 1cK0 1cL0 1cN0 1cL0 1cN0 1cL0 1cQ0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|34e5", "Europe/Kirov|LMT +03 +04 +05|-3i.M -30 -40 -50|01232323232323232321212121212121212121212121212121212121212121|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|48e4", "Europe/Lisbon|LMT WET WEST WEMT CET CEST|A.J 0 -10 -20 -10 -20|012121212121212121212121212121212121212121212321232123212321212121212121212121212121212121212121214121212121212121212121212121212124545454212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2le00 aPX0 Sp0 LX0 1vc0 Tc0 1uM0 SM0 1vc0 Tc0 1vc0 SM0 1vc0 6600 1co0 3E00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 3I00 17c0 1cM0 1cM0 3Fc0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 1tA0 1cM0 1dc0 1400 gL0 IM0 s10 U00 dX0 Rc0 pd0 Rc0 gL0 Oo0 pd0 Rc0 gL0 Oo0 pd0 14o0 1cM0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 3Co0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 pvy0 1cM0 1cM0 1fA0 1cM0 1cM0 1cN0 1cL0 1cN0 1cM0 1cM0 1cM0 1cM0 1cN0 1cL0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|27e5", "Europe/Luxembourg|LMT CET CEST WET WEST WEST WET|-o.A -10 -20 0 -10 -20 -10|0121212134343434343434343434343434343434343434343434565651212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2DG0o.A t6mo.A TB0 1nX0 Up0 1o20 11A0 rW0 CM0 1qP0 R90 1EO0 UK0 1u20 10m0 1ip0 1in0 17e0 19W0 1fB0 1db0 1cp0 1in0 17d0 1fz0 1a10 1in0 1a10 1in0 17f0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Dc0 vA0 60L0 WM0 1fA0 1cM0 17c0 1io0 16M0 1C00 Uo0 1eeo0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|54e4", "Europe/Madrid|WET WEST WEMT CET CEST|0 -10 -20 -10 -20|010101010101010101210343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-25Td0 19B0 1cL0 1dd0 b1z0 18p0 3HX0 17d0 1fz0 1a10 1io0 1a00 1in0 17d0 iIn0 Hd0 1cL0 bb0 1200 2s20 14n0 5aL0 Mp0 1vz0 17d0 1in0 17d0 1in0 17d0 1in0 17d0 6hX0 11B0 XHX0 1a10 1fz0 1a10 19X0 1cN0 1fz0 1a10 1fC0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|62e5", "Europe/Malta|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2arB0 Lz0 1cN0 1db0 1410 1on0 Wp0 1qL0 17d0 1cL0 M3B0 5M20 WM0 1fA0 1co0 17c0 1iM0 16m0 1de0 1lc0 14m0 1lc0 WO0 1qM0 GTW0 On0 1C10 LA0 1C00 LA0 1EM0 LA0 1C00 LA0 1zc0 Oo0 1C00 Oo0 1co0 1cM0 1lA0 Xc0 1qq0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1iN0 19z0 1fB0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|42e4", "Europe/Minsk|MMT EET MSK CEST CET MSD EEST +03|-1O -20 -30 -20 -10 -40 -30 -30|01234343252525252525252525261616161616161616161616161616161616161617|-1Pc1O eUnO qNX0 3gQ0 WM0 1fA0 1cM0 Al0 1tsn0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 3Fc0 1cN0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0|19e5", "Europe/Monaco|PMT WET WEST WEMT CET CEST|-9.l 0 -10 -20 -10 -20|01212121212121212121212121212121212121212121212121232323232345454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-2nco9.l cNb9.l HA0 19A0 1iM0 11c0 1oo0 Wo0 1rc0 QM0 1EM0 UM0 1u00 10o0 1io0 1wo0 Rc0 1a00 1fA0 1cM0 1cM0 1io0 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Df0 2RV0 11z0 11B0 1ze0 WM0 1fA0 1cM0 1fa0 1aq0 16M0 1ekn0 1cL0 1fC0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|38e3", "Europe/Moscow|MMT MMT MST MDST MSD MSK +05 EET EEST MSK|-2u.h -2v.j -3v.j -4v.j -40 -30 -50 -20 -30 -40|012132345464575454545454545454545458754545454545454545454545454545454545454595|-2ag2u.h 2pyW.W 1bA0 11X0 GN0 1Hb0 c4v.j ik0 3DA0 dz0 15A0 c10 2q10 iM10 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cN0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|16e6", "Europe/Paris|PMT WET WEST CEST CET WEMT|-9.l 0 -10 -20 -10 -20|0121212121212121212121212121212121212121212121212123434352543434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434|-2nco8.l cNb8.l HA0 19A0 1iM0 11c0 1oo0 Wo0 1rc0 QM0 1EM0 UM0 1u00 10o0 1io0 1wo0 Rc0 1a00 1fA0 1cM0 1cM0 1io0 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 1fA0 1a00 1io0 17c0 1cM0 1cM0 1a00 1io0 1cM0 1cM0 1a00 1fA0 1io0 17c0 1cM0 1cM0 1a00 1fA0 1io0 1qM0 Df0 Ik0 5M30 WM0 1fA0 1cM0 Vx0 hB0 1aq0 16M0 1ekn0 1cL0 1fC0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|11e6", "Europe/Riga|RMT LST EET MSK CEST CET MSD EEST|-1A.y -2A.y -20 -30 -20 -10 -40 -30|010102345454536363636363636363727272727272727272727272727272727272727272727272727272727272727272727272727272727272727272727272|-25TzA.y 11A0 1iM0 ko0 gWm0 yDXA.y 2bX0 3fE0 WM0 1fA0 1cM0 1cM0 4m0 1sLy0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cN0 1o00 11A0 1o00 11A0 1qM0 3oo0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|64e4", "Europe/Rome|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2arB0 Lz0 1cN0 1db0 1410 1on0 Wp0 1qL0 17d0 1cL0 M3B0 5M20 WM0 1fA0 1cM0 16M0 1iM0 16m0 1de0 1lc0 14m0 1lc0 WO0 1qM0 GTW0 On0 1C10 LA0 1C00 LA0 1EM0 LA0 1C00 LA0 1zc0 Oo0 1C00 Oo0 1C00 LA0 1zc0 Oo0 1C00 LA0 1C00 LA0 1zc0 Oo0 1C00 Oo0 1zc0 Oo0 1fC0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|39e5", "Europe/Samara|LMT +03 +04 +05|-3k.k -30 -40 -50|0123232323232323232121232323232323232323232323232323232323212|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 2y10 14m0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 2sp0 WM0|12e5", "Europe/Saratov|LMT +03 +04 +05|-34.i -30 -40 -50|012323232323232321212121212121212121212121212121212121212121212|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1cM0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 5810", "Europe/Simferopol|SMT EET MSK CEST CET MSD EEST MSK|-2g -20 -30 -20 -10 -40 -30 -40|012343432525252525252525252161616525252616161616161616161616161616161616172|-1Pc2g eUog rEn0 2qs0 WM0 1fA0 1cM0 3V0 1u0L0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1Q00 4eL0 1cL0 1cN0 1cL0 1cN0 dX0 WL0 1cN0 1cL0 1fB0 1o30 11B0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11z0 1nW0|33e4", "Europe/Sofia|EET CET CEST EEST|-20 -10 -20 -30|01212103030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030303030|-168L0 WM0 1fA0 1cM0 1cM0 1cN0 1mKH0 1dd0 1fb0 1ap0 1fb0 1a20 1fy0 1a30 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cK0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 1nX0 11E0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|12e5", "Europe/Stockholm|CET CEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2azC0 TB0 2yDe0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|15e5", "Europe/Tallinn|TMT CET CEST EET MSK MSD EEST|-1D -10 -20 -20 -30 -40 -30|012103421212454545454545454546363636363636363636363636363636363636363636363636363636363636363636363636363636363636363636363|-26oND teD 11A0 1Ta0 4rXl KSLD 2FX0 2Jg0 WM0 1fA0 1cM0 18J0 1sTX0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o10 11A0 1qM0 5QM0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|41e4", "Europe/Tirane|LMT CET CEST|-1j.k -10 -20|01212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2glBj.k 14pcj.k 5LC0 WM0 4M0 1fCK0 10n0 1op0 11z0 1pd0 11z0 1qN0 WL0 1qp0 Xb0 1qp0 Xb0 1qp0 11z0 1lB0 11z0 1qN0 11z0 1iN0 16n0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|42e4", "Europe/Ulyanovsk|LMT +03 +04 +05 +02|-3d.A -30 -40 -50 -20|01232323232323232321214121212121212121212121212121212121212121212|-22WM0 qH90 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1fA0 2pB0 IM0 rX0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0 3rd0", "Europe/Uzhgorod|CET CEST MSK MSD EET EEST|-10 -20 -30 -40 -20 -30|010101023232323232323232320454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454|-1cqL0 6i00 WM0 1fA0 1cM0 1ml0 1Cp0 1r3W0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1Q00 1Nf0 2pw0 1cL0 1cN0 1cL0 1cN0 1cL0 1cQ0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|11e4", "Europe/Vienna|CET CEST|-10 -20|0101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 3KM0 14o0 LA00 6i00 WM0 1fA0 1cM0 1cM0 1cM0 400 2qM0 1a00 1cM0 1cM0 1io0 17c0 1gHa0 19X0 1cP0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|18e5", "Europe/Vilnius|WMT KMT CET EET MSK CEST MSD EEST|-1o -1z.A -10 -20 -30 -20 -40 -30|012324525254646464646464646473737373737373737352537373737373737373737373737373737373737373737373737373737373737373737373|-293do 6ILM.o 1Ooz.A zz0 Mfd0 29W0 3is0 WM0 1fA0 1cM0 LV0 1tgL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11B0 1o00 11A0 1qM0 8io0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|54e4", "Europe/Volgograd|LMT +03 +04 +05|-2V.E -30 -40 -50|01232323232323232121212121212121212121212121212121212121212121|-21IqV.E psLV.E 23CL0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 2pB0 1cM0 1cM0 1cM0 1fA0 1cM0 3Co0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 8Hz0|10e5", "Europe/Warsaw|WMT CET CEST EET EEST|-1o -10 -20 -20 -30|012121234312121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121|-2ctdo 1LXo 11d0 1iO0 11A0 1o00 11A0 1on0 11A0 6zy0 HWP0 5IM0 WM0 1fA0 1cM0 1dz0 1mL0 1en0 15B0 1aq0 1nA0 11A0 1io0 17c0 1fA0 1a00 iDX0 LA0 1cM0 1cM0 1C00 Oo0 1cM0 1cM0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1C00 LA0 uso0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cN0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|17e5", "Europe/Zaporozhye|+0220 EET MSK CEST CET MSD EEST|-2k -20 -30 -20 -10 -40 -30|01234342525252525252525252526161616161616161616161616161616161616161616161616161616161616161616161616161616161616161616161|-1Pc2k eUok rdb0 2RE0 WM0 1fA0 8m0 1v9a0 1db0 1cN0 1db0 1cN0 1db0 1dd0 1cO0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cK0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cQ0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|77e4", "HST|HST|a0|0|", "Indian/Chagos|LMT +05 +06|-4N.E -50 -60|012|-2xosN.E 3AGLN.E|30e2", "Indian/Cocos|+0630|-6u|0||596", "Indian/Kerguelen|-00 +05|0 -50|01|-MG00|130", "Indian/Mahe|LMT +04|-3F.M -40|01|-2yO3F.M|79e3", "Indian/Maldives|MMT +05|-4S -50|01|-olgS|35e4", "Indian/Mauritius|LMT +04 +05|-3O -40 -50|012121|-2xorO 34unO 14L0 12kr0 11z0|15e4", "Indian/Reunion|LMT +04|-3F.Q -40|01|-2mDDF.Q|84e4", "Pacific/Kwajalein|+11 -12 +12|-b0 c0 -c0|012|-AX0 W9X0|14e3", "MET|MET MEST|-10 -20|01010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-2aFe0 11d0 1iO0 11A0 1o00 11A0 Qrc0 6i00 WM0 1fA0 1cM0 1cM0 1cM0 16M0 1gMM0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00", "MST|MST|70|0|", "MST7MDT|MST MDT MWT MPT|70 60 60 60|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261r0 1nX0 11B0 1nX0 SgN0 8x20 ix0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "Pacific/Chatham|+1215 +1245 +1345|-cf -cJ -dJ|012121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121212|-WqAf 1adef IM0 1C00 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Oo0 1zc0 Rc0 1zc0 Oo0 1qM0 14o0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1lc0 14o0 1lc0 14o0 1lc0 17c0 1io0 17c0 1io0 17c0 1io0 17c0 1io0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00|600", "Pacific/Apia|LMT -1130 -11 -10 +14 +13|bq.U bu b0 a0 -e0 -d0|01232345454545454545454545454545454545454545454545454545454|-2nDMx.4 1yW03.4 2rRbu 1ff0 1a00 CI0 AQ0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1io0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1a00 1fA0 1cM0 1fA0 1a00 1fA0 1a00|37e3", "Pacific/Bougainville|+10 +09 +11|-a0 -90 -b0|0102|-16Wy0 7CN0 2MQp0|18e4", "Pacific/Efate|LMT +11 +12|-bd.g -b0 -c0|0121212121212121212121|-2l9nd.g 2Szcd.g 1cL0 1oN0 10L0 1fB0 19X0 1fB0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1fB0 Lz0 1Nd0 An0|66e3", "Pacific/Enderbury|-12 -11 +13|c0 b0 -d0|012|nIc0 B7X0|1", "Pacific/Fakaofo|-11 +13|b0 -d0|01|1Gfn0|483", "Pacific/Fiji|LMT +12 +13|-bT.I -c0 -d0|0121212121212121212121212121212121212121212121212121212121212121|-2bUzT.I 3m8NT.I LA0 1EM0 IM0 nJc0 LA0 1o00 Rc0 1wo0 Ao0 1Nc0 Ao0 1Q00 xz0 1SN0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0 1VA0 s00 1VA0 s00 1VA0 s00 1VA0 uM0 1SM0 uM0 1SM0 uM0|88e4", "Pacific/Galapagos|LMT -05 -06|5W.o 50 60|01212|-1yVS1.A 2dTz1.A gNd0 rz0|25e3", "Pacific/Gambier|LMT -09|8X.M 90|01|-2jof0.c|125", "Pacific/Guadalcanal|LMT +11|-aD.M -b0|01|-2joyD.M|11e4", "Pacific/Guam|GST ChST|-a0 -a0|01|1fpq0|17e4", "Pacific/Honolulu|HST HDT HST|au 9u a0|010102|-1thLu 8x0 lef0 8Pz0 46p0|37e4", "Pacific/Kiritimati|-1040 -10 +14|aE a0 -e0|012|nIaE B7Xk|51e2", "Pacific/Kosrae|+11 +12|-b0 -c0|010|-AX0 1bdz0|66e2", "Pacific/Majuro|+11 +12|-b0 -c0|01|-AX0|28e3", "Pacific/Marquesas|LMT -0930|9i 9u|01|-2joeG|86e2", "Pacific/Pago_Pago|LMT SST|bm.M b0|01|-2nDMB.c|37e2", "Pacific/Nauru|LMT +1130 +09 +12|-b7.E -bu -90 -c0|01213|-1Xdn7.E PvzB.E 5RCu 1ouJu|10e3", "Pacific/Niue|-1120 -1130 -11|bk bu b0|012|-KfME 17y0a|12e2", "Pacific/Norfolk|+1112 +1130 +1230 +11|-bc -bu -cu -b0|01213|-Kgbc W01G On0 1COp0|25e4", "Pacific/Noumea|LMT +11 +12|-b5.M -b0 -c0|01212121|-2l9n5.M 2EqM5.M xX0 1PB0 yn0 HeP0 Ao0|98e3", "Pacific/Pitcairn|-0830 -08|8u 80|01|18Vku|56", "Pacific/Rarotonga|-1030 -0930 -10|au 9u a0|012121212121212121212121212|lyWu IL0 1zcu Onu 1zcu Onu 1zcu Rbu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Onu 1zcu Rbu 1zcu Onu 1zcu Onu 1zcu Onu|13e3", "Pacific/Tahiti|LMT -10|9W.g a0|01|-2joe1.I|18e4", "Pacific/Tongatapu|+1220 +13 +14|-ck -d0 -e0|0121212121|-1aB0k 2n5dk 15A0 1wo0 xz0 1Q10 xz0 zWN0 s00|75e3", "PST8PDT|PST PDT PWT PPT|80 70 70 70|010102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-261q0 1nX0 11B0 1nX0 SgN0 8x10 iy0 QwN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 s10 1Vz0 LB0 1BX0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0", "WET|WET WEST|0 -10|010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|hDB0 1a00 1fA0 1cM0 1cM0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00"],
            links: ["Africa/Abidjan|Africa/Bamako", "Africa/Abidjan|Africa/Banjul", "Africa/Abidjan|Africa/Conakry", "Africa/Abidjan|Africa/Dakar", "Africa/Abidjan|Africa/Freetown", "Africa/Abidjan|Africa/Lome", "Africa/Abidjan|Africa/Nouakchott", "Africa/Abidjan|Africa/Ouagadougou", "Africa/Abidjan|Africa/Timbuktu", "Africa/Abidjan|Atlantic/St_Helena", "Africa/Cairo|Egypt", "Africa/Johannesburg|Africa/Maseru", "Africa/Johannesburg|Africa/Mbabane", "Africa/Lagos|Africa/Bangui", "Africa/Lagos|Africa/Brazzaville", "Africa/Lagos|Africa/Douala", "Africa/Lagos|Africa/Kinshasa", "Africa/Lagos|Africa/Libreville", "Africa/Lagos|Africa/Luanda", "Africa/Lagos|Africa/Malabo", "Africa/Lagos|Africa/Niamey", "Africa/Lagos|Africa/Porto-Novo", "Africa/Maputo|Africa/Blantyre", "Africa/Maputo|Africa/Bujumbura", "Africa/Maputo|Africa/Gaborone", "Africa/Maputo|Africa/Harare", "Africa/Maputo|Africa/Kigali", "Africa/Maputo|Africa/Lubumbashi", "Africa/Maputo|Africa/Lusaka", "Africa/Nairobi|Africa/Addis_Ababa", "Africa/Nairobi|Africa/Asmara", "Africa/Nairobi|Africa/Asmera", "Africa/Nairobi|Africa/Dar_es_Salaam", "Africa/Nairobi|Africa/Djibouti", "Africa/Nairobi|Africa/Kampala", "Africa/Nairobi|Africa/Mogadishu", "Africa/Nairobi|Indian/Antananarivo", "Africa/Nairobi|Indian/Comoro", "Africa/Nairobi|Indian/Mayotte", "Africa/Tripoli|Libya", "America/Adak|America/Atka", "America/Adak|US/Aleutian", "America/Anchorage|US/Alaska", "America/Argentina/Buenos_Aires|America/Buenos_Aires", "America/Argentina/Catamarca|America/Argentina/ComodRivadavia", "America/Argentina/Catamarca|America/Catamarca", "America/Argentina/Cordoba|America/Cordoba", "America/Argentina/Cordoba|America/Rosario", "America/Argentina/Jujuy|America/Jujuy", "America/Argentina/Mendoza|America/Mendoza", "America/Atikokan|America/Coral_Harbour", "America/Chicago|US/Central", "America/Curacao|America/Aruba", "America/Curacao|America/Kralendijk", "America/Curacao|America/Lower_Princes", "America/Denver|America/Shiprock", "America/Denver|Navajo", "America/Denver|US/Mountain", "America/Detroit|US/Michigan", "America/Edmonton|Canada/Mountain", "America/Fort_Wayne|America/Indiana/Indianapolis", "America/Fort_Wayne|America/Indianapolis", "America/Fort_Wayne|US/East-Indiana", "America/Halifax|Canada/Atlantic", "America/Havana|Cuba", "America/Indiana/Knox|America/Knox_IN", "America/Indiana/Knox|US/Indiana-Starke", "America/Jamaica|Jamaica", "America/Kentucky/Louisville|America/Louisville", "America/Los_Angeles|US/Pacific", "America/Los_Angeles|US/Pacific-New", "America/Manaus|Brazil/West", "America/Mazatlan|Mexico/BajaSur", "America/Mexico_City|Mexico/General", "America/New_York|US/Eastern", "America/Noronha|Brazil/DeNoronha", "America/Panama|America/Cayman", "America/Phoenix|US/Arizona", "America/Port_of_Spain|America/Anguilla", "America/Port_of_Spain|America/Antigua", "America/Port_of_Spain|America/Dominica", "America/Port_of_Spain|America/Grenada", "America/Port_of_Spain|America/Guadeloupe", "America/Port_of_Spain|America/Marigot", "America/Port_of_Spain|America/Montserrat", "America/Port_of_Spain|America/St_Barthelemy", "America/Port_of_Spain|America/St_Kitts", "America/Port_of_Spain|America/St_Lucia", "America/Port_of_Spain|America/St_Thomas", "America/Port_of_Spain|America/St_Vincent", "America/Port_of_Spain|America/Tortola", "America/Port_of_Spain|America/Virgin", "America/Regina|Canada/Saskatchewan", "America/Rio_Branco|America/Porto_Acre", "America/Rio_Branco|Brazil/Acre", "America/Santiago|Chile/Continental", "America/Sao_Paulo|Brazil/East", "America/St_Johns|Canada/Newfoundland", "America/Tijuana|America/Ensenada", "America/Tijuana|America/Santa_Isabel", "America/Tijuana|Mexico/BajaNorte", "America/Toronto|America/Montreal", "America/Toronto|Canada/Eastern", "America/Vancouver|Canada/Pacific", "America/Whitehorse|Canada/Yukon", "America/Winnipeg|Canada/Central", "Asia/Ashgabat|Asia/Ashkhabad", "Asia/Bangkok|Asia/Phnom_Penh", "Asia/Bangkok|Asia/Vientiane", "Asia/Dhaka|Asia/Dacca", "Asia/Dubai|Asia/Muscat", "Asia/Ho_Chi_Minh|Asia/Saigon", "Asia/Hong_Kong|Hongkong", "Asia/Jerusalem|Asia/Tel_Aviv", "Asia/Jerusalem|Israel", "Asia/Kathmandu|Asia/Katmandu", "Asia/Kolkata|Asia/Calcutta", "Asia/Kuala_Lumpur|Asia/Singapore", "Asia/Kuala_Lumpur|Singapore", "Asia/Macau|Asia/Macao", "Asia/Makassar|Asia/Ujung_Pandang", "Asia/Nicosia|Europe/Nicosia", "Asia/Qatar|Asia/Bahrain", "Asia/Rangoon|Asia/Yangon", "Asia/Riyadh|Asia/Aden", "Asia/Riyadh|Asia/Kuwait", "Asia/Seoul|ROK", "Asia/Shanghai|Asia/Chongqing", "Asia/Shanghai|Asia/Chungking", "Asia/Shanghai|Asia/Harbin", "Asia/Shanghai|PRC", "Asia/Taipei|ROC", "Asia/Tehran|Iran", "Asia/Thimphu|Asia/Thimbu", "Asia/Tokyo|Japan", "Asia/Ulaanbaatar|Asia/Ulan_Bator", "Asia/Urumqi|Asia/Kashgar", "Atlantic/Faroe|Atlantic/Faeroe", "Atlantic/Reykjavik|Iceland", "Atlantic/South_Georgia|Etc/GMT+2", "Australia/Adelaide|Australia/South", "Australia/Brisbane|Australia/Queensland", "Australia/Broken_Hill|Australia/Yancowinna", "Australia/Darwin|Australia/North", "Australia/Hobart|Australia/Tasmania", "Australia/Lord_Howe|Australia/LHI", "Australia/Melbourne|Australia/Victoria", "Australia/Perth|Australia/West", "Australia/Sydney|Australia/ACT", "Australia/Sydney|Australia/Canberra", "Australia/Sydney|Australia/NSW", "Etc/GMT-0|Etc/GMT", "Etc/GMT-0|Etc/GMT+0", "Etc/GMT-0|Etc/GMT0", "Etc/GMT-0|Etc/Greenwich", "Etc/GMT-0|GMT", "Etc/GMT-0|GMT+0", "Etc/GMT-0|GMT-0", "Etc/GMT-0|GMT0", "Etc/GMT-0|Greenwich", "Etc/UCT|UCT", "Etc/UTC|Etc/Universal", "Etc/UTC|Etc/Zulu", "Etc/UTC|UTC", "Etc/UTC|Universal", "Etc/UTC|Zulu", "Europe/Belgrade|Europe/Ljubljana", "Europe/Belgrade|Europe/Podgorica", "Europe/Belgrade|Europe/Sarajevo", "Europe/Belgrade|Europe/Skopje", "Europe/Belgrade|Europe/Zagreb", "Europe/Chisinau|Europe/Tiraspol", "Europe/Dublin|Eire", "Europe/Helsinki|Europe/Mariehamn", "Europe/Istanbul|Asia/Istanbul", "Europe/Istanbul|Turkey", "Europe/Lisbon|Portugal", "Europe/London|Europe/Belfast", "Europe/London|Europe/Guernsey", "Europe/London|Europe/Isle_of_Man", "Europe/London|Europe/Jersey", "Europe/London|GB", "Europe/London|GB-Eire", "Europe/Moscow|W-SU", "Europe/Oslo|Arctic/Longyearbyen", "Europe/Oslo|Atlantic/Jan_Mayen", "Europe/Prague|Europe/Bratislava", "Europe/Rome|Europe/San_Marino", "Europe/Rome|Europe/Vatican", "Europe/Warsaw|Poland", "Europe/Zurich|Europe/Busingen", "Europe/Zurich|Europe/Vaduz", "Indian/Christmas|Etc/GMT-7", "Pacific/Auckland|Antarctica/McMurdo", "Pacific/Auckland|Antarctica/South_Pole", "Pacific/Auckland|NZ", "Pacific/Chatham|NZ-CHAT", "Pacific/Easter|Chile/EasterIsland", "Pacific/Guam|Pacific/Saipan", "Pacific/Honolulu|Pacific/Johnston", "Pacific/Honolulu|US/Hawaii", "Pacific/Kwajalein|Kwajalein", "Pacific/Pago_Pago|Pacific/Midway", "Pacific/Pago_Pago|Pacific/Samoa", "Pacific/Pago_Pago|US/Samoa", "Pacific/Palau|Etc/GMT-9", "Pacific/Pohnpei|Etc/GMT-11", "Pacific/Pohnpei|Pacific/Ponape", "Pacific/Port_Moresby|Etc/GMT-10", "Pacific/Port_Moresby|Pacific/Chuuk", "Pacific/Port_Moresby|Pacific/Truk", "Pacific/Port_Moresby|Pacific/Yap", "Pacific/Tarawa|Etc/GMT-12", "Pacific/Tarawa|Pacific/Funafuti", "Pacific/Tarawa|Pacific/Wake", "Pacific/Tarawa|Pacific/Wallis"]
        }
    },
    799: function (c, e, t) {
        var n, o, a;
        ! function (i, M) {
            "use strict";
            "object" == typeof c && c.exports ? c.exports = M(t(1)) : (o = [t(1)], n = M, void 0 !== (a = "function" == typeof n ? n.apply(e, o) : n) && (c.exports = a))
        }(0, function (c) {
            "use strict";

            function e(c) {
                return c > 96 ? c - 87 : c > 64 ? c - 29 : c - 48
            }

            function t(c) {
                var t, n = 0,
                    o = c.split("."),
                    a = o[0],
                    i = o[1] || "",
                    M = 1,
                    r = 0,
                    s = 1;
                for (45 === c.charCodeAt(0) && (n = 1, s = -1), n; n < a.length; n++) t = e(a.charCodeAt(n)), r = 60 * r + t;
                for (n = 0; n < i.length; n++) M /= 60, t = e(i.charCodeAt(n)), r += t * M;
                return r * s
            }

            function n(c) {
                for (var e = 0; e < c.length; e++) c[e] = t(c[e])
            }

            function o(c, e) {
                for (var t = 0; t < e; t++) c[t] = Math.round((c[t - 1] || 0) + 6e4 * c[t]);
                c[e - 1] = 1 / 0
            }

            function a(c, e) {
                var t, n = [];
                for (t = 0; t < e.length; t++) n[t] = c[e[t]];
                return n
            }

            function i(c) {
                var e = c.split("|"),
                    t = e[2].split(" "),
                    i = e[3].split(""),
                    M = e[4].split(" ");
                return n(t), n(i), n(M), o(M, i.length), {
                    name: e[0],
                    abbrs: a(e[1].split(" "), i),
                    offsets: a(t, i),
                    untils: M,
                    population: 0 | e[5]
                }
            }

            function M(c) {
                c && this._set(i(c))
            }

            function r(c) {
                var e = c.toTimeString(),
                    t = e.match(/\([a-z ]+\)/i);
                t && t[0] ? (t = t[0].match(/[A-Z]/g), t = t ? t.join("") : void 0) : (t = e.match(/[A-Z]{3,5}/g), t = t ? t[0] : void 0), "GMT" === t && (t = void 0), this.at = +c, this.abbr = t, this.offset = c.getTimezoneOffset()
            }

            function s(c) {
                this.zone = c, this.offsetScore = 0, this.abbrScore = 0
            }

            function p(c, e) {
                for (var t, n; n = 6e4 * ((e.at - c.at) / 12e4 | 0);) t = new r(new Date(c.at + n)), t.offset === c.offset ? c = t : e = t;
                return c
            }

            function l() {
                var c, e, t, n = (new Date).getFullYear() - 2,
                    o = new r(new Date(n, 0, 1)),
                    a = [o];
                for (t = 1; t < 48; t++) e = new r(new Date(n, t, 1)), e.offset !== o.offset && (c = p(o, e), a.push(c), a.push(new r(new Date(c.at + 6e4)))), o = e;
                for (t = 0; t < 4; t++) a.push(new r(new Date(n + t, 0, 1))), a.push(new r(new Date(n + t, 6, 1)));
                return a
            }

            function b(c, e) {
                return c.offsetScore !== e.offsetScore ? c.offsetScore - e.offsetScore : c.abbrScore !== e.abbrScore ? c.abbrScore - e.abbrScore : e.zone.population - c.zone.population
            }

            function d(c, e) {
                var t, o;
                for (n(e), t = 0; t < e.length; t++) o = e[t], y[o] = y[o] || {}, y[o][c] = !0
            }

            function z(c) {
                var e, t, n, o = c.length,
                    a = {},
                    i = [];
                for (e = 0; e < o; e++) {
                    n = y[c[e].offset] || {};
                    for (t in n) n.hasOwnProperty(t) && (a[t] = !0)
                }
                for (e in a) a.hasOwnProperty(e) && i.push(_[e]);
                return i
            }

            function A() {
                try {
                    var c = Intl.DateTimeFormat().resolvedOptions().timeZone;
                    if (c && c.length > 3) {
                        var e = _[f(c)];
                        if (e) return e;
                        X("Moment Timezone found " + c + " from the Intl api, but did not have that data loaded.")
                    }
                } catch (c) {}
                var t, n, o, a = l(),
                    i = a.length,
                    M = z(a),
                    r = [];
                for (n = 0; n < M.length; n++) {
                    for (t = new s(L(M[n]), i), o = 0; o < i; o++) t.scoreOffsetAt(a[o]);
                    r.push(t)
                }
                return r.sort(b), r.length > 0 ? r[0].zone.name : void 0
            }

            function u(c) {
                return B && !c || (B = A()), B
            }

            function f(c) {
                return (c || "").toLowerCase().replace(/\//g, "_")
            }

            function m(c) {
                var e, t, n, o;
                for ("string" == typeof c && (c = [c]), e = 0; e < c.length; e++) n = c[e].split("|"), t = n[0], o = f(t), C[o] = c[e], _[o] = t, d(o, n[2].split(" "))
            }

            function L(c, e) {
                c = f(c);
                var t, n = C[c];
                return n instanceof M ? n : "string" == typeof n ? (n = new M(n), C[c] = n, n) : v[c] && e !== L && (t = L(v[c], L)) ? (n = C[c] = new M, n._set(t), n.name = _[c], n) : null
            }

            function O() {
                var c, e = [];
                for (c in _) _.hasOwnProperty(c) && (C[c] || C[v[c]]) && _[c] && e.push(_[c]);
                return e.sort()
            }

            function q(c) {
                var e, t, n, o;
                for ("string" == typeof c && (c = [c]), e = 0; e < c.length; e++) t = c[e].split("|"), n = f(t[0]), o = f(t[1]), v[n] = o, _[n] = t[0], v[o] = n, _[o] = t[1]
            }

            function h(c) {
                m(c.zones), q(c.links), g.dataVersion = c.version
            }

            function N(c) {
                return N.didShowError || (N.didShowError = !0, X("moment.tz.zoneExists('" + c + "') has been deprecated in favor of !moment.tz.zone('" + c + "')")), !!L(c)
            }

            function W(c) {
                var e = "X" === c._f || "x" === c._f;
                return !(!c._a || void 0 !== c._tzm || e)
            }

            function X(c) {
                "undefined" != typeof console && console.error
            }

            function g(e) {
                var t = Array.prototype.slice.call(arguments, 0, -1),
                    n = arguments[arguments.length - 1],
                    o = L(n),
                    a = c.utc.apply(null, t);
                return o && !c.isMoment(e) && W(a) && a.add(o.parse(a), "minutes"), a.tz(n), a
            }

            function T(c) {
                return function () {
                    return this._z ? this._z.abbr(this) : c.call(this)
                }
            }
            var B, C = {},
                v = {},
                _ = {},
                y = {};
            c && "string" == typeof c.version || X("Moment Timezone requires Moment.js. See https://momentjs.com/timezone/docs/#/use-it/browser/");
            var E = c.version.split("."),
                S = +E[0],
                k = +E[1];
            (S < 2 || 2 === S && k < 6) && X("Moment Timezone requires Moment.js >= 2.6.0. You are using Moment.js " + c.version + ". See momentjs.com"), M.prototype = {
                _set: function (c) {
                    this.name = c.name, this.abbrs = c.abbrs, this.untils = c.untils, this.offsets = c.offsets, this.population = c.population
                },
                _index: function (c) {
                    var e, t = +c,
                        n = this.untils;
                    for (e = 0; e < n.length; e++)
                        if (t < n[e]) return e
                },
                parse: function (c) {
                    var e, t, n, o, a = +c,
                        i = this.offsets,
                        M = this.untils,
                        r = M.length - 1;
                    for (o = 0; o < r; o++)
                        if (e = i[o], t = i[o + 1], n = i[o ? o - 1 : o], e < t && g.moveAmbiguousForward ? e = t : e > n && g.moveInvalidForward && (e = n), a < M[o] - 6e4 * e) return i[o];
                    return i[r]
                },
                abbr: function (c) {
                    return this.abbrs[this._index(c)]
                },
                offset: function (c) {
                    return X("zone.offset has been deprecated in favor of zone.utcOffset"), this.offsets[this._index(c)]
                },
                utcOffset: function (c) {
                    return this.offsets[this._index(c)]
                }
            }, s.prototype.scoreOffsetAt = function (c) {
                this.offsetScore += Math.abs(this.zone.utcOffset(c.at) - c.offset), this.zone.abbr(c.at).replace(/[^A-Z]/g, "") !== c.abbr && this.abbrScore++
            }, g.version = "0.5.21", g.dataVersion = "", g._zones = C, g._links = v, g._names = _, g.add = m, g.link = q, g.load = h, g.zone = L, g.zoneExists = N, g.guess = u, g.names = O, g.Zone = M, g.unpack = i, g.unpackBase60 = t, g.needsOffset = W, g.moveInvalidForward = !0, g.moveAmbiguousForward = !1;
            var R = c.fn;
            c.tz = g, c.defaultZone = null, c.updateOffset = function (e, t) {
                var n, o = c.defaultZone;
                void 0 === e._z && (o && W(e) && !e._isUTC && (e._d = c.utc(e._a)._d, e.utc().add(o.parse(e), "minutes")), e._z = o), e._z && (n = e._z.utcOffset(e), Math.abs(n) < 16 && (n /= 60), void 0 !== e.utcOffset ? e.utcOffset(-n, t) : e.zone(n, t))
            }, R.tz = function (e, t) {
                if (e) {
                    if ("string" != typeof e) throw new Error("Time zone name must be a string, got " + e + " [" + typeof e + "]");
                    return this._z = L(e), this._z ? c.updateOffset(this, t) : X("Moment Timezone has no data for " + e + ". See http://momentjs.com/timezone/docs/#/data-loading/."), this
                }
                if (this._z) return this._z.name
            }, R.zoneName = T(R.zoneName), R.zoneAbbr = T(R.zoneAbbr), R.utc = function (c) {
                return function () {
                    return this._z = null, c.apply(this, arguments)
                }
            }(R.utc), c.tz.setDefault = function (e) {
                return (S < 2 || 2 === S && k < 9) && X("Moment Timezone setDefault() requires Moment.js >= 2.9.0. You are using Moment.js " + c.version + "."), c.defaultZone = e ? L(e) : null, c
            };
            var w = c.momentProperties;
            return "[object Array]" === Object.prototype.toString.call(w) ? (w.push("_z"), w.push("_a")) : w && (w._z = null), c
        })
    },
    803: function (c, e, t) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var n = t(2),
            o = t.n(n),
            a = t(25);
        e.default = {
            data: function () {
                return {
                    lists: [{
                        name: {
                            en: "Select Showtime",
                            th: "เลือกรอบฉาย"
                        }
                    }, {
                        name: {
                            en: "Select Seat",
                            th: "เลือกที่นั่ง"
                        }
                    }, {
                        name: {
                            en: "Payment",
                            th: "การชำระเงิน"
                        }
                    }, {
                        name: {
                            en: "Finish",
                            th: "สิ้นสุด"
                        }
                    }]
                }
            },
            props: ["lang", "currentStep"],
            computed: o()({}, t.i(a.a)(["showtime_data"]), {
                canBack: function () {
                    return this.currentStep > 0 && this.currentStep < 3 && (1 !== this.currentStep || "SelectSeatFacebook" !== this.$route.name)
                },
                lastStep: function () {
                    return "SelectSeatFacebook" === this.$route.name || "PaymentFacebook" === this.$route.name || "PurchaseCompleteFacebook" === this.$route.name ? this.lists.length - 1 : this.lists.length
                }
            }),
            methods: {
                genStepNo: function (c) {
                    return "SelectSeatFacebook" === this.$route.name || "PaymentFacebook" === this.$route.name || "PurchaseCompleteFacebook" === this.$route.name ? c : c + 1
                },
                goToStep: function (c, e) {
                    if (e.preventDefault(), this.currentStep < this.lists.length - 1 && this.currentStep > c) switch (c) {
                        case 0:
                            if ("SelectSeatFacebook" !== this.$route.name) switch (this.showtime_data.from) {
                                case "movie":
                                    this.$router.push({
                                        name: "ShowTimeByMovie",
                                        params: {
                                            movie_id: this.showtime_data.movie.id
                                        }
                                    });
                                    break;
                                case "movie-cinema":
                                    this.$router.push({
                                        name: "ShowTimeByMovie",
                                        params: {
                                            movie_id: this.showtime_data.movie.id,
                                            cinema_id: this.showtime_data.cinema.id
                                        }
                                    });
                                    break;
                                case "cinema":
                                    this.$router.push({
                                        name: "ShowTimeByCinema",
                                        params: {
                                            cinema_id: this.showtime_data.cinema.id
                                        }
                                    });
                                    break;
                                case "other":
                                    this.$router.push({
                                        name: "ShowTimeByMovie",
                                        params: {
                                            movie_id: this.showtime_data.movie.id,
                                            cinema_id: this.showtime_data.cinema.id
                                        }
                                    })
                            }
                            break;
                        case 1:
                            "PaymentFacebook" === this.$route.name ? this.$router.push({
                                name: "SelectSeatFacebook",
                                params: {
                                    session_key: this.showtime_data.session.id
                                }
                            }) : this.$router.push({
                                name: "SelectSeat"
                            })
                    }
                }
            }
        }
    },
    806: function (c, e, t) {
        var n = t(17)(t(803), t(808), null, null);
        c.exports = n.exports
    },
    808: function (c, e) {
        c.exports = {
            render: function () {
                var c = this,
                    e = c.$createElement,
                    t = c._self._c || e;
                return t("div", {
                    staticClass: "step-bar"
                }, [t("div", {
                    staticClass: "container"
                }, [t("ul", {
                    staticClass: "desktop"
                }, c._l(c.lists, function (e, n) {
                    return t("li", {
                        key: n,
                        staticClass: "step-item",
                        class: {
                            active: n === c.currentStep, pass: n < c.currentStep
                        }
                    }, [t("a", {
                        attrs: {
                            href: "#"
                        },
                        on: {
                            click: function (e) {
                                c.goToStep(n, e)
                            }
                        }
                    }, [t("div", {
                        staticClass: "no"
                    }, [c._v(c._s(c.genStepNo(n)))]), t("div", {
                        staticClass: "step-name"
                    }, [c._v(c._s(e.name[c.lang]))])])])
                })), t("div", {
                    staticClass: "mobile"
                }, [c.canBack ? t("a", {
                    staticClass: "back-step",
                    attrs: {
                        href: "#"
                    },
                    on: {
                        click: function (e) {
                            c.goToStep(c.currentStep - 1, e)
                        }
                    }
                }) : c._e(), t("div", {
                    staticClass: "no"
                }, [t("span", {
                    staticClass: "current"
                }, [c._v(c._s(c.genStepNo(c.currentStep)))]), c._v(" of " + c._s(c.lastStep) + "\n            ")]), t("div", {
                    staticClass: "step-name"
                }, [c._v(c._s(c.lists[c.currentStep].name[c.lang]))])])])])
            },
            staticRenderFns: []
        }
    },
    834: function (c, e, t) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var n = t(7),
            o = t.n(n),
            a = t(2),
            i = t.n(a),
            M = t(25),
            r = t(1),
            s = t.n(r),
            p = t(72),
            l = t.n(p);
        e.default = {
            props: ["showtime", "selected"],
            components: {
                "sf-icon": l.a
            },
            computed: i()({}, t.i(M.a)(["app", "language"]), {
                cinemaNumber: function () {
                    return this.showtime.session.theater_number
                },
                selectedSeats: function () {
                    if (o()(this.selected).length) {
                        return this.selected.seats.map(function (c) {
                            return c.code
                        })
                    }
                    return []
                },
                isPromotionPrice: function () {
                    return !!(o()(this.selected).length && this.selected.ticket_types && this.selected.ticket_types.length && this.selected.ticket_types.filter(function (c) {
                        return c.is_special_price || c.promo_session_id
                    }).length)
                }
            }),
            methods: {
                formatDateTime: function (c, e) {
                    return s.a.locale(this.app.lang), s()(c).format(e)
                },
                formatDateUnixTime: function (c, e) {
                    return s.a.locale(this.app.lang), s.a.unix(c).format(e)
                },
                priceFormat: function (c) {
                    for (;
                        /(\d+)(\d{3})/.test(c.toString());) c = c.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                    return c
                }
            }
        }
    },
    846: function (c, e, t) {
        ! function (e, t) {
            c.exports = t()
        }(0, function () {
            return function (c) {
                function e(n) {
                    if (t[n]) return t[n].exports;
                    var o = t[n] = {
                        exports: {},
                        id: n,
                        loaded: !1
                    };
                    return c[n].call(o.exports, o, o.exports, e), o.loaded = !0, o.exports
                }
                var t = {};
                return e.m = c, e.c = t, e.p = "", e(0)
            }([function (c, e, t) {
                (function (e) {
                    "use strict";
                    var n = function (c, e) {
                        var t = this;
                        if (t.element = "string" == typeof c ? document.querySelector(c) : void 0 !== c.length && c.length > 0 ? c[0] : c, !t.element) throw new Error("[cleave.js] Please check the element");
                        e.initValue = t.element.value, t.properties = n.DefaultProperties.assign({}, e), t.init()
                    };
                    n.prototype = {
                        init: function () {
                            var c = this,
                                e = c.properties;
                            if (!(e.numeral || e.phone || e.creditCard || e.time || e.date || 0 !== e.blocksLength || e.prefix)) return void c.onInput(e.initValue);
                            e.maxLength = n.Util.getMaxLength(e.blocks), c.isAndroid = n.Util.isAndroid(), c.lastInputValue = "", c.onChangeListener = c.onChange.bind(c), c.onKeyDownListener = c.onKeyDown.bind(c), c.onFocusListener = c.onFocus.bind(c), c.onCutListener = c.onCut.bind(c), c.onCopyListener = c.onCopy.bind(c), c.element.addEventListener("input", c.onChangeListener), c.element.addEventListener("keydown", c.onKeyDownListener), c.element.addEventListener("focus", c.onFocusListener), c.element.addEventListener("cut", c.onCutListener), c.element.addEventListener("copy", c.onCopyListener), c.initPhoneFormatter(), c.initDateFormatter(), c.initTimeFormatter(), c.initNumeralFormatter(), (e.initValue || e.prefix && !e.noImmediatePrefix) && c.onInput(e.initValue)
                        },
                        initNumeralFormatter: function () {
                            var c = this,
                                e = c.properties;
                            e.numeral && (e.numeralFormatter = new n.NumeralFormatter(e.numeralDecimalMark, e.numeralIntegerScale, e.numeralDecimalScale, e.numeralThousandsGroupStyle, e.numeralPositiveOnly, e.stripLeadingZeroes, e.delimiter))
                        },
                        initTimeFormatter: function () {
                            var c = this,
                                e = c.properties;
                            e.time && (e.timeFormatter = new n.TimeFormatter(e.timePattern), e.blocks = e.timeFormatter.getBlocks(), e.blocksLength = e.blocks.length, e.maxLength = n.Util.getMaxLength(e.blocks))
                        },
                        initDateFormatter: function () {
                            var c = this,
                                e = c.properties;
                            e.date && (e.dateFormatter = new n.DateFormatter(e.datePattern), e.blocks = e.dateFormatter.getBlocks(), e.blocksLength = e.blocks.length, e.maxLength = n.Util.getMaxLength(e.blocks))
                        },
                        initPhoneFormatter: function () {
                            var c = this,
                                e = c.properties;
                            if (e.phone) try {
                                e.phoneFormatter = new n.PhoneFormatter(new e.root.Cleave.AsYouTypeFormatter(e.phoneRegionCode), e.delimiter)
                            } catch (c) {
                                throw new Error("[cleave.js] Please include phone-type-formatter.{country}.js lib")
                            }
                        },
                        onKeyDown: function (c) {
                            var e = this,
                                t = e.properties,
                                o = c.which || c.keyCode,
                                a = n.Util,
                                i = e.element.value;
                            if (229 === o && a.isAndroidBackspaceKeydown(e.lastInputValue, i) && (o = 8), e.lastInputValue = i, 8 === o && a.isDelimiter(i.slice(-t.delimiterLength), t.delimiter, t.delimiters)) return void(t.backspace = !0);
                            t.backspace = !1
                        },
                        onChange: function () {
                            this.onInput(this.element.value)
                        },
                        onFocus: function () {
                            var c = this,
                                e = c.properties;
                            n.Util.fixPrefixCursor(c.element, e.prefix, e.delimiter, e.delimiters)
                        },
                        onCut: function (c) {
                            this.copyClipboardData(c), this.onInput("")
                        },
                        onCopy: function (c) {
                            this.copyClipboardData(c)
                        },
                        copyClipboardData: function (c) {
                            var e = this,
                                t = e.properties,
                                o = n.Util,
                                a = e.element.value,
                                i = "";
                            i = t.copyDelimiter ? a : o.stripDelimiters(a, t.delimiter, t.delimiters);
                            try {
                                c.clipboardData ? c.clipboardData.setData("Text", i) : window.clipboardData.setData("Text", i), c.preventDefault()
                            } catch (c) {}
                        },
                        onInput: function (c) {
                            var e = this,
                                t = e.properties,
                                o = n.Util;
                            return t.numeral || !t.backspace || o.isDelimiter(c.slice(-t.delimiterLength), t.delimiter, t.delimiters) || (c = o.headStr(c, c.length - t.delimiterLength)), t.phone ? (!t.prefix || t.noImmediatePrefix && !c.length ? t.result = t.phoneFormatter.format(c) : t.result = t.prefix + t.phoneFormatter.format(c).slice(t.prefix.length), void e.updateValueState()) : t.numeral ? (!t.prefix || t.noImmediatePrefix && !c.length ? t.result = t.numeralFormatter.format(c) : t.result = t.prefix + t.numeralFormatter.format(c), void e.updateValueState()) : (t.date && (c = t.dateFormatter.getValidatedDate(c)), t.time && (c = t.timeFormatter.getValidatedTime(c)), c = o.stripDelimiters(c, t.delimiter, t.delimiters), c = o.getPrefixStrippedValue(c, t.prefix, t.prefixLength, t.result), c = t.numericOnly ? o.strip(c, /[^\d]/g) : c, c = t.uppercase ? c.toUpperCase() : c, c = t.lowercase ? c.toLowerCase() : c, !t.prefix || t.noImmediatePrefix && !c.length || (c = t.prefix + c, 0 !== t.blocksLength) ? (t.creditCard && e.updateCreditCardPropsByValue(c), c = o.headStr(c, t.maxLength), t.result = o.getFormattedValue(c, t.blocks, t.blocksLength, t.delimiter, t.delimiters, t.delimiterLazyShow), void e.updateValueState()) : (t.result = c, void e.updateValueState()))
                        },
                        updateCreditCardPropsByValue: function (c) {
                            var e, t = this,
                                o = t.properties,
                                a = n.Util;
                            a.headStr(o.result, 4) !== a.headStr(c, 4) && (e = n.CreditCardDetector.getInfo(c, o.creditCardStrictMode), o.blocks = e.blocks, o.blocksLength = o.blocks.length, o.maxLength = a.getMaxLength(o.blocks), o.creditCardType !== e.type && (o.creditCardType = e.type, o.onCreditCardTypeChanged.call(t, o.creditCardType)))
                        },
                        updateValueState: function () {
                            var c = this,
                                e = n.Util,
                                t = c.properties;
                            if (c.element) {
                                var o = c.element.selectionEnd,
                                    a = c.element.value,
                                    i = t.result;
                                if (o = e.getNextCursorPosition(o, a, i, t.delimiter, t.delimiters), c.isAndroid) return void window.setTimeout(function () {
                                    c.element.value = i, e.setSelection(c.element, o, t.document, !1), c.callOnValueChanged()
                                }, 1);
                                c.element.value = i, e.setSelection(c.element, o, t.document, !1), c.callOnValueChanged()
                            }
                        },
                        callOnValueChanged: function () {
                            var c = this,
                                e = c.properties;
                            e.onValueChanged.call(c, {
                                target: {
                                    value: e.result,
                                    rawValue: c.getRawValue()
                                }
                            })
                        },
                        setPhoneRegionCode: function (c) {
                            var e = this;
                            e.properties.phoneRegionCode = c, e.initPhoneFormatter(), e.onChange()
                        },
                        setRawValue: function (c) {
                            var e = this,
                                t = e.properties;
                            c = void 0 !== c && null !== c ? c.toString() : "", t.numeral && (c = c.replace(".", t.numeralDecimalMark)), t.backspace = !1, e.element.value = c, e.onInput(c)
                        },
                        getRawValue: function () {
                            var c = this,
                                e = c.properties,
                                t = n.Util,
                                o = c.element.value;
                            return e.rawValueTrimPrefix && (o = t.getPrefixStrippedValue(o, e.prefix, e.prefixLength, e.result)), o = e.numeral ? e.numeralFormatter.getRawValue(o) : t.stripDelimiters(o, e.delimiter, e.delimiters)
                        },
                        getISOFormatDate: function () {
                            var c = this,
                                e = c.properties;
                            return e.date ? e.dateFormatter.getISOFormatDate() : ""
                        },
                        getFormattedValue: function () {
                            return this.element.value
                        },
                        destroy: function () {
                            var c = this;
                            c.element.removeEventListener("input", c.onChangeListener), c.element.removeEventListener("keydown", c.onKeyDownListener), c.element.removeEventListener("focus", c.onFocusListener), c.element.removeEventListener("cut", c.onCutListener), c.element.removeEventListener("copy", c.onCopyListener)
                        },
                        toString: function () {
                            return "[Cleave Object]"
                        }
                    }, n.NumeralFormatter = t(1), n.DateFormatter = t(2), n.TimeFormatter = t(3), n.PhoneFormatter = t(4), n.CreditCardDetector = t(5), n.Util = t(6), n.DefaultProperties = t(7), ("object" == typeof e && e ? e : window).Cleave = n, c.exports = n
                }).call(e, function () {
                    return this
                }())
            }, function (c, e) {
                "use strict";
                var t = function (c, e, n, o, a, i, M) {
                    var r = this;
                    r.numeralDecimalMark = c || ".", r.numeralIntegerScale = e > 0 ? e : 0, r.numeralDecimalScale = n >= 0 ? n : 2, r.numeralThousandsGroupStyle = o || t.groupStyle.thousand, r.numeralPositiveOnly = !!a, r.stripLeadingZeroes = !1 !== i, r.delimiter = M || "" === M ? M : ",", r.delimiterRE = M ? new RegExp("\\" + M, "g") : ""
                };
                t.groupStyle = {
                    thousand: "thousand",
                    lakh: "lakh",
                    wan: "wan",
                    none: "none"
                }, t.prototype = {
                    getRawValue: function (c) {
                        return c.replace(this.delimiterRE, "").replace(this.numeralDecimalMark, ".")
                    },
                    format: function (c) {
                        var e, n, o = this,
                            a = "";
                        switch (c = c.replace(/[A-Za-z]/g, "").replace(o.numeralDecimalMark, "M").replace(/[^\dM-]/g, "").replace(/^\-/, "N").replace(/\-/g, "").replace("N", o.numeralPositiveOnly ? "" : "-").replace("M", o.numeralDecimalMark), o.stripLeadingZeroes && (c = c.replace(/^(-)?0+(?=\d)/, "$1")), n = c, c.indexOf(o.numeralDecimalMark) >= 0 && (e = c.split(o.numeralDecimalMark), n = e[0], a = o.numeralDecimalMark + e[1].slice(0, o.numeralDecimalScale)), o.numeralIntegerScale > 0 && (n = n.slice(0, o.numeralIntegerScale + ("-" === c.slice(0, 1) ? 1 : 0))), o.numeralThousandsGroupStyle) {
                            case t.groupStyle.lakh:
                                n = n.replace(/(\d)(?=(\d\d)+\d$)/g, "$1" + o.delimiter);
                                break;
                            case t.groupStyle.wan:
                                n = n.replace(/(\d)(?=(\d{4})+$)/g, "$1" + o.delimiter);
                                break;
                            case t.groupStyle.thousand:
                                n = n.replace(/(\d)(?=(\d{3})+$)/g, "$1" + o.delimiter)
                        }
                        return n.toString() + (o.numeralDecimalScale > 0 ? a.toString() : "")
                    }
                }, c.exports = t
            }, function (c, e) {
                "use strict";
                var t = function (c) {
                    var e = this;
                    e.date = [], e.blocks = [], e.datePattern = c, e.initBlocks()
                };
                t.prototype = {
                    initBlocks: function () {
                        var c = this;
                        c.datePattern.forEach(function (e) {
                            "Y" === e ? c.blocks.push(4) : c.blocks.push(2)
                        })
                    },
                    getISOFormatDate: function () {
                        var c = this,
                            e = c.date;
                        return e[2] ? e[2] + "-" + c.addLeadingZero(e[1]) + "-" + c.addLeadingZero(e[0]) : ""
                    },
                    getBlocks: function () {
                        return this.blocks
                    },
                    getValidatedDate: function (c) {
                        var e = this,
                            t = "";
                        return c = c.replace(/[^\d]/g, ""), e.blocks.forEach(function (n, o) {
                            if (c.length > 0) {
                                var a = c.slice(0, n),
                                    i = a.slice(0, 1),
                                    M = c.slice(n);
                                switch (e.datePattern[o]) {
                                    case "d":
                                        "00" === a ? a = "01" : parseInt(i, 10) > 3 ? a = "0" + i : parseInt(a, 10) > 31 && (a = "31");
                                        break;
                                    case "m":
                                        "00" === a ? a = "01" : parseInt(i, 10) > 1 ? a = "0" + i : parseInt(a, 10) > 12 && (a = "12")
                                }
                                t += a, c = M
                            }
                        }), this.getFixedDateString(t)
                    },
                    getFixedDateString: function (c) {
                        var e, t, n, o = this,
                            a = o.datePattern,
                            i = [],
                            M = 0,
                            r = 0,
                            s = 0,
                            p = 0,
                            l = 0,
                            b = 0,
                            d = !1;
                        return 4 === c.length && "y" !== a[0].toLowerCase() && "y" !== a[1].toLowerCase() && (p = "d" === a[0] ? 0 : 2, l = 2 - p, e = parseInt(c.slice(p, p + 2), 10), t = parseInt(c.slice(l, l + 2), 10), i = this.getFixedDate(e, t, 0)), 8 === c.length && (a.forEach(function (c, e) {
                            switch (c) {
                                case "d":
                                    M = e;
                                    break;
                                case "m":
                                    r = e;
                                    break;
                                default:
                                    s = e
                            }
                        }), b = 2 * s, p = M <= s ? 2 * M : 2 * M + 2, l = r <= s ? 2 * r : 2 * r + 2, e = parseInt(c.slice(p, p + 2), 10), t = parseInt(c.slice(l, l + 2), 10), n = parseInt(c.slice(b, b + 4), 10), d = 4 === c.slice(b, b + 4).length, i = this.getFixedDate(e, t, n)), o.date = i, 0 === i.length ? c : a.reduce(function (c, e) {
                            switch (e) {
                                case "d":
                                    return c + o.addLeadingZero(i[0]);
                                case "m":
                                    return c + o.addLeadingZero(i[1]);
                                default:
                                    return c + (d ? o.addLeadingZeroForYear(i[2]) : "")
                            }
                        }, "")
                    },
                    getFixedDate: function (c, e, t) {
                        return c = Math.min(c, 31), e = Math.min(e, 12), t = parseInt(t || 0, 10), (e < 7 && e % 2 == 0 || e > 8 && e % 2 == 1) && (c = Math.min(c, 2 === e ? this.isLeapYear(t) ? 29 : 28 : 30)), [c, e, t]
                    },
                    isLeapYear: function (c) {
                        return c % 4 == 0 && c % 100 != 0 || c % 400 == 0
                    },
                    addLeadingZero: function (c) {
                        return (c < 10 ? "0" : "") + c
                    },
                    addLeadingZeroForYear: function (c) {
                        return (c < 10 ? "000" : c < 100 ? "00" : c < 1e3 ? "0" : "") + c
                    }
                }, c.exports = t
            }, function (c, e) {
                "use strict";
                var t = function (c) {
                    var e = this;
                    e.time = [], e.blocks = [], e.timePattern = c, e.initBlocks()
                };
                t.prototype = {
                    initBlocks: function () {
                        var c = this;
                        c.timePattern.forEach(function () {
                            c.blocks.push(2)
                        })
                    },
                    getISOFormatTime: function () {
                        var c = this,
                            e = c.time;
                        return e[2] ? c.addLeadingZero(e[0]) + ":" + c.addLeadingZero(e[1]) + ":" + c.addLeadingZero(e[2]) : ""
                    },
                    getBlocks: function () {
                        return this.blocks
                    },
                    getValidatedTime: function (c) {
                        var e = this,
                            t = "";
                        return c = c.replace(/[^\d]/g, ""), e.blocks.forEach(function (n, o) {
                            if (c.length > 0) {
                                var a = c.slice(0, n),
                                    i = a.slice(0, 1),
                                    M = c.slice(n);
                                switch (e.timePattern[o]) {
                                    case "h":
                                        parseInt(i, 10) > 2 ? a = "0" + i : parseInt(a, 10) > 23 && (a = "23");
                                        break;
                                    case "m":
                                    case "s":
                                        parseInt(i, 10) > 5 ? a = "0" + i : parseInt(a, 10) > 60 && (a = "60")
                                }
                                t += a, c = M
                            }
                        }), this.getFixedTimeString(t)
                    },
                    getFixedTimeString: function (c) {
                        var e, t, n, o = this,
                            a = o.timePattern,
                            i = [],
                            M = 0,
                            r = 0,
                            s = 0,
                            p = 0,
                            l = 0,
                            b = 0;
                        return 6 === c.length && (a.forEach(function (c, e) {
                            switch (c) {
                                case "s":
                                    M = 2 * e;
                                    break;
                                case "m":
                                    r = 2 * e;
                                    break;
                                case "h":
                                    s = 2 * e
                            }
                        }), b = s, l = r, p = M, e = parseInt(c.slice(p, p + 2), 10), t = parseInt(c.slice(l, l + 2), 10), n = parseInt(c.slice(b, b + 2), 10), i = this.getFixedTime(n, t, e)), 4 === c.length && o.timePattern.indexOf("s") < 0 && (a.forEach(function (c, e) {
                            switch (c) {
                                case "m":
                                    r = 2 * e;
                                    break;
                                case "h":
                                    s = 2 * e
                            }
                        }), b = s, l = r, e = 0, t = parseInt(c.slice(l, l + 2), 10), n = parseInt(c.slice(b, b + 2), 10), i = this.getFixedTime(n, t, e)), o.time = i, 0 === i.length ? c : a.reduce(function (c, e) {
                            switch (e) {
                                case "s":
                                    return c + o.addLeadingZero(i[2]);
                                case "m":
                                    return c + o.addLeadingZero(i[1]);
                                case "h":
                                    return c + o.addLeadingZero(i[0])
                            }
                        }, "")
                    },
                    getFixedTime: function (c, e, t) {
                        return t = Math.min(parseInt(t || 0, 10), 60), e = Math.min(e, 60), c = Math.min(c, 60), [c, e, t]
                    },
                    addLeadingZero: function (c) {
                        return (c < 10 ? "0" : "") + c
                    }
                }, c.exports = t
            }, function (c, e) {
                "use strict";
                var t = function (c, e) {
                    var t = this;
                    t.delimiter = e || "" === e ? e : " ", t.delimiterRE = e ? new RegExp("\\" + e, "g") : "", t.formatter = c
                };
                t.prototype = {
                    setFormatter: function (c) {
                        this.formatter = c
                    },
                    format: function (c) {
                        var e = this;
                        e.formatter.clear(), c = c.replace(/[^\d+]/g, ""), c = c.replace(/^\+/, "B").replace(/\+/g, "").replace("B", "+"), c = c.replace(e.delimiterRE, "");
                        for (var t, n = "", o = !1, a = 0, i = c.length; a < i; a++) t = e.formatter.inputDigit(c.charAt(a)), /[\s()-]/g.test(t) ? (n = t, o = !0) : o || (n = t);
                        return n = n.replace(/[()]/g, ""), n = n.replace(/[\s-]/g, e.delimiter)
                    }
                }, c.exports = t
            }, function (c, e) {
                "use strict";
                var t = {
                    blocks: {
                        uatp: [4, 5, 6],
                        amex: [4, 6, 5],
                        diners: [4, 6, 4],
                        discover: [4, 4, 4, 4],
                        mastercard: [4, 4, 4, 4],
                        dankort: [4, 4, 4, 4],
                        instapayment: [4, 4, 4, 4],
                        jcb15: [4, 6, 5],
                        jcb: [4, 4, 4, 4],
                        maestro: [4, 4, 4, 4],
                        visa: [4, 4, 4, 4],
                        mir: [4, 4, 4, 4],
                        unionPay: [4, 4, 4, 4],
                        general: [4, 4, 4, 4],
                        generalStrict: [4, 4, 4, 7]
                    },
                    re: {
                        uatp: /^(?!1800)1\d{0,14}/,
                        amex: /^3[47]\d{0,13}/,
                        discover: /^(?:6011|65\d{0,2}|64[4-9]\d?)\d{0,12}/,
                        diners: /^3(?:0([0-5]|9)|[689]\d?)\d{0,11}/,
                        mastercard: /^(5[1-5]\d{0,2}|22[2-9]\d{0,1}|2[3-7]\d{0,2})\d{0,12}/,
                        dankort: /^(5019|4175|4571)\d{0,12}/,
                        instapayment: /^63[7-9]\d{0,13}/,
                        jcb15: /^(?:2131|1800)\d{0,11}/,
                        jcb: /^(?:35\d{0,2})\d{0,12}/,
                        maestro: /^(?:5[0678]\d{0,2}|6304|67\d{0,2})\d{0,12}/,
                        mir: /^220[0-4]\d{0,12}/,
                        visa: /^4\d{0,15}/,
                        unionPay: /^62\d{0,14}/
                    },
                    getInfo: function (c, e) {
                        var n = t.blocks,
                            o = t.re;
                        e = !!e;
                        for (var a in o)
                            if (o[a].test(c)) {
                                var i;
                                return i = e ? n.generalStrict : n[a], {
                                    type: a,
                                    blocks: i
                                }
                            } return {
                            type: "unknown",
                            blocks: e ? n.generalStrict : n.general
                        }
                    }
                };
                c.exports = t
            }, function (c, e) {
                "use strict";
                var t = {
                    noop: function () {},
                    strip: function (c, e) {
                        return c.replace(e, "")
                    },
                    isDelimiter: function (c, e, t) {
                        return 0 === t.length ? c === e : t.some(function (e) {
                            if (c === e) return !0
                        })
                    },
                    getDelimiterREByDelimiter: function (c) {
                        return new RegExp(c.replace(/([.?*+^$[\]\\(){}|-])/g, "\\$1"), "g")
                    },
                    getNextCursorPosition: function (c, e, t, n, o) {
                        return e.length === c ? t.length : c + this.getPositionOffset(c, e, t, n, o)
                    },
                    getPositionOffset: function (c, e, t, n, o) {
                        var a, i, M;
                        return a = this.stripDelimiters(e.slice(0, c), n, o), i = this.stripDelimiters(t.slice(0, c), n, o), M = a.length - i.length, 0 !== M ? M / Math.abs(M) : 0
                    },
                    stripDelimiters: function (c, e, t) {
                        var n = this;
                        if (0 === t.length) {
                            var o = e ? n.getDelimiterREByDelimiter(e) : "";
                            return c.replace(o, "")
                        }
                        return t.forEach(function (e) {
                            c = c.replace(n.getDelimiterREByDelimiter(e), "")
                        }), c
                    },
                    headStr: function (c, e) {
                        return c.slice(0, e)
                    },
                    getMaxLength: function (c) {
                        return c.reduce(function (c, e) {
                            return c + e
                        }, 0)
                    },
                    getPrefixStrippedValue: function (c, e, t, n) {
                        if (c.slice(0, t) !== e)
                            if (c.length < n.length) c = c.length > t ? n : e;
                            else {
                                var o = this.getFirstDiffIndex(e, c.slice(0, t));
                                c = e + c.slice(o, o + 1) + c.slice(t + 1)
                            } return c.slice(t)
                    },
                    getFirstDiffIndex: function (c, e) {
                        for (var t = 0; c.charAt(t) === e.charAt(t);)
                            if ("" === c.charAt(t++)) return -1;
                        return t
                    },
                    getFormattedValue: function (c, e, t, n, o, a) {
                        var i, M = "",
                            r = o.length > 0;
                        return 0 === t ? c : (e.forEach(function (e, s) {
                            if (c.length > 0) {
                                var p = c.slice(0, e),
                                    l = c.slice(e);
                                i = r ? o[a ? s - 1 : s] || i : n, a ? (s > 0 && (M += i), M += p) : (M += p, p.length === e && s < t - 1 && (M += i)), c = l
                            }
                        }), M)
                    },
                    fixPrefixCursor: function (c, e, t, n) {
                        if (c) {
                            var o = c.value,
                                a = t || n[0] || " ";
                            if (c.setSelectionRange && e && !(e.length + a.length < o.length)) {
                                var i = 2 * o.length;
                                setTimeout(function () {
                                    c.setSelectionRange(i, i)
                                }, 1)
                            }
                        }
                    },
                    setSelection: function (c, e, t) {
                        if (c === this.getActiveElement(t) && !(c && c.value.length <= e))
                            if (c.createTextRange) {
                                var n = c.createTextRange();
                                n.move("character", e), n.select()
                            } else try {
                                c.setSelectionRange(e, e)
                            } catch (c) {}
                    },
                    getActiveElement: function (c) {
                        var e = c.activeElement;
                        return e && e.shadowRoot ? this.getActiveElement(e.shadowRoot) : e
                    },
                    isAndroid: function () {
                        return navigator && /android/i.test(navigator.userAgent)
                    },
                    isAndroidBackspaceKeydown: function (c, e) {
                        return !!(this.isAndroid() && c && e) && e === c.slice(0, -1)
                    }
                };
                c.exports = t
            }, function (c, e) {
                (function (e) {
                    "use strict";
                    var t = {
                        assign: function (c, t) {
                            return c = c || {}, t = t || {}, c.creditCard = !!t.creditCard, c.creditCardStrictMode = !!t.creditCardStrictMode, c.creditCardType = "", c.onCreditCardTypeChanged = t.onCreditCardTypeChanged || function () {}, c.phone = !!t.phone, c.phoneRegionCode = t.phoneRegionCode || "AU", c.phoneFormatter = {}, c.time = !!t.time, c.timePattern = t.timePattern || ["h", "m", "s"], c.timeFormatter = {}, c.date = !!t.date, c.datePattern = t.datePattern || ["d", "m", "Y"], c.dateFormatter = {}, c.numeral = !!t.numeral, c.numeralIntegerScale = t.numeralIntegerScale > 0 ? t.numeralIntegerScale : 0, c.numeralDecimalScale = t.numeralDecimalScale >= 0 ? t.numeralDecimalScale : 2, c.numeralDecimalMark = t.numeralDecimalMark || ".", c.numeralThousandsGroupStyle = t.numeralThousandsGroupStyle || "thousand", c.numeralPositiveOnly = !!t.numeralPositiveOnly, c.stripLeadingZeroes = !1 !== t.stripLeadingZeroes, c.numericOnly = c.creditCard || c.date || !!t.numericOnly, c.uppercase = !!t.uppercase, c.lowercase = !!t.lowercase, c.prefix = c.creditCard || c.date ? "" : t.prefix || "", c.noImmediatePrefix = !!t.noImmediatePrefix, c.prefixLength = c.prefix.length, c.rawValueTrimPrefix = !!t.rawValueTrimPrefix, c.copyDelimiter = !!t.copyDelimiter, c.initValue = void 0 !== t.initValue && null !== t.initValue ? t.initValue.toString() : "", c.delimiter = t.delimiter || "" === t.delimiter ? t.delimiter : t.date ? "/" : t.time ? ":" : t.numeral ? "," : (t.phone, " "), c.delimiterLength = c.delimiter.length, c.delimiterLazyShow = !!t.delimiterLazyShow, c.delimiters = t.delimiters || [], c.blocks = t.blocks || [], c.blocksLength = c.blocks.length, c.root = "object" == typeof e && e ? e : window, c.document = t.document || c.root.document, c.maxLength = 0, c.backspace = !1, c.result = "", c.onValueChanged = t.onValueChanged || function () {}, c
                        }
                    };
                    c.exports = t
                }).call(e, function () {
                    return this
                }())
            }])
        })
    },
    847: function (c, e, t) {
        "use strict";

        function n(c, e) {
            var t, n, o;
            return c ? (n = c.prefixPattern, o = c.exactPattern, t = JSON.parse(JSON.stringify(c)), e ? (t.prefixPattern = n, t.exactPattern = o) : (delete t.prefixPattern, delete t.exactPattern), t) : null
        }

        function o(c) {
            return s[c] || r[c]
        }

        function a(c) {
            var e, t, a, i = [],
                r = [];
            if (!("string" == typeof c || c instanceof String)) return [];
            for (a = 0; a < M.length; a++) e = M[a], t = o(e), 0 !== c.length ? t.exactPattern.test(c) ? r.push(n(t)) : t.prefixPattern.test(c) && i.push(n(t)) : i.push(n(t));
            return r.length ? r : i
        }

        function i(c, e) {
            var t = M.indexOf(c);
            if (!e && -1 === t) throw new Error('"' + c + '" is not a supported card type.');
            return t
        }
        var M, r = {},
            s = {},
            p = ["visa", "mastercard", "american-express", "diners-club", "discover", "jcb", "unionpay", "maestro", "elo", "mir"];
        M = n(p), r.visa = {
            niceType: "Visa",
            type: "visa",
            prefixPattern: /^4/,
            exactPattern: new RegExp("^4(?!31274|51416|57393|0117[89]|38935|5763[12])\\d{5,}$"),
            gaps: [4, 8, 12],
            lengths: [16, 18, 19],
            code: {
                name: "CVV",
                size: 3
            }
        }, r.mastercard = {
            niceType: "Mastercard",
            type: "mastercard",
            prefixPattern: /^(5|5[1-5]|2|22|222|222[1-9]|2[3-6]|27|27[0-2]|2720)$/,
            exactPattern: /^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[0-1]|2720)\d*$/,
            gaps: [4, 8, 12],
            lengths: [16],
            code: {
                name: "CVC",
                size: 3
            }
        }, r["american-express"] = {
            niceType: "American Express",
            type: "american-express",
            prefixPattern: /^(3|34|37)$/,
            exactPattern: /^3[47]\d*$/,
            isAmex: !0,
            gaps: [4, 10],
            lengths: [15],
            code: {
                name: "CID",
                size: 4
            }
        }, r["diners-club"] = {
            niceType: "Diners Club",
            type: "diners-club",
            prefixPattern: /^(3|3[0689]|30[0-5])$/,
            exactPattern: /^3(0[0-5]|[689])\d*$/,
            gaps: [4, 10],
            lengths: [14, 16, 19],
            code: {
                name: "CVV",
                size: 3
            }
        }, r.discover = {
            niceType: "Discover",
            type: "discover",
            prefixPattern: /^(6|60|601|6011|65|65\d{1,4}|64|64[4-9])$/,
            exactPattern: new RegExp("^(6011|65(?!003[1-3]|003[5-9]|004\\d|005[0-1]|040[5-9]|04[1-3]\\d|048[5-9]|049\\d|05[0-2]\\d|053[0-8]|054[1-9]|05[5-8]\\d|059[0-8]|070\\d|071[0-8]|072[0-7]|090[1-9]|09[1-6]\\d|097[0-8]|165[2-9]|16[6-7]\\d|50[0-1]\\d|502[1-9]|50[3-4]\\d|505[0-8])\\d{4}|64[4-9])\\d*$"),
            gaps: [4, 8, 12],
            lengths: [16, 19],
            code: {
                name: "CID",
                size: 3
            }
        }, r.jcb = {
            niceType: "JCB",
            type: "jcb",
            prefixPattern: /^(2|21|213|2131|1|18|180|1800|3|35)$/,
            exactPattern: /^(2131|1800|35)\d*$/,
            gaps: [4, 8, 12],
            lengths: [16, 17, 18, 19],
            code: {
                name: "CVV",
                size: 3
            }
        }, r.unionpay = {
            niceType: "UnionPay",
            type: "unionpay",
            prefixPattern: /^((6|62|62\d|(621(?!83|88|98|99))|622(?!06)|627[0267]\d?|628(?!0|1)|629[1,2])|622018)$/,
            exactPattern: new RegExp("^((620|(621(?!83|88|98|99))|622(?!06|018)|62[3-6]|627[026]|6277(?!80)\\d{2}|628(?!0|1)|629[12])\\d*|622018\\d{12})$"),
            gaps: [4, 8, 12],
            lengths: [16, 17, 18, 19],
            code: {
                name: "CVN",
                size: 3
            }
        }, r.maestro = {
            niceType: "Maestro",
            type: "maestro",
            prefixPattern: /^(5|5[06-9]|6\d*)$/,
            exactPattern: new RegExp("^(5[6-9]|50(?!6699|067[0-6][0-9]|677[0-8]|9[0-9][0-9][0-9])\\d{4}|67|63(?!6297|6368)\\d{4})\\d*$"),
            gaps: [4, 8, 12],
            lengths: [12, 13, 14, 15, 16, 17, 18, 19],
            code: {
                name: "CVC",
                size: 3
            }
        }, r.elo = {
            niceType: "Elo",
            type: "elo",
            prefixPattern: new RegExp("^([4-6]|4[035]|4[035]1|4011|40117|40117[89]|4312|43127|431274|438|4389|43893|438935|4514|45141|451416|457|457[36]|45739|45763|457393|45763[12]|50|50[69]|506[6-7]|50669|5067[0-7]|5067[0-6][0-9]|50677[0-8]|509[0-9]|509[0-9][0-9]|509[0-9][0-9][0-9]|6[235]|627|636|65[015]|6277|62778|627780|636[23]|63629|636297|63636|636368|650[0479]|6500[3-5]|65003[1-3]|65003[5-9]|65004[0-9]65005[01]|6504[0-3]|65040[5-9]|65041[0-9]|6505[4-9]|65054[1-9]|6505[5-8][0-9]|65059[0-8]|6507[0-2]|65070[0-9]|65071[0-8]|65072[0-7]|6509[0-7]|65090[1-9]|6509[1-6][0-9]|65097[0-8]|6516|6516[5-7]|65165[2-9]|6516[6-7][0-9]|6550|6550[0-5]|6550[01][0-9]|65502[1-9]|6550[3-4][0-9]|65505[0-8])$"),
            exactPattern: new RegExp("^(4(31274|51416|57393)|50(4175|6699|67[0-6][0-9]|677[0-8]|9[0-9][0-9][0-9])|627780|636(297|368)|4(0117[89]|38935|5763[12])|65(003[1-3]|003[5-9]|004\\d|005[0-1]|040[5-9]|04[1-3]\\d|048[5-9]|049\\d|05[0-2]\\d|053[0-8]|054[1-9]|05[5-8]\\d|059[0-8]|070[0-9]|071[0-8]|072[0-7]|090[1-9]|09[1-6][0-9]|097[0-8]|165[2-9]|16[6-7][0-9]|50[0-1][0-9]|502[1-9]|50[3-4][0-9]|505[0-8]))\\d*$"),
            gaps: [4, 8, 12],
            lengths: [16],
            code: {
                name: "CVE",
                size: 3
            }
        }, r.mir = {
            niceType: "Mir",
            type: "mir",
            prefixPattern: /^(2|22|220|220[0-4])$/,
            exactPattern: /^(220[0-4])\d*$/,
            gaps: [4, 8, 12],
            lengths: [16, 17, 18, 19],
            code: {
                name: "CVP2",
                size: 3
            }
        }, a.getTypeInfo = function (c) {
            return n(o(c))
        }, a.removeCard = function (c) {
            var e = i(c);
            M.splice(e, 1)
        }, a.addCard = function (c) {
            var e = i(c.type, !0);
            s[c.type] = c, -1 === e && M.push(c.type)
        }, a.updateCard = function (c, e) {
            var t, o = s[c] || r[c];
            if (!o) throw new Error('"' + c + '" is not a recognized type. Use `addCard` instead.');
            if (e.type && o.type !== e.type) throw new Error("Cannot overwrite type parameter.");
            t = n(o, !0), Object.keys(t).forEach(function (c) {
                e[c] && (t[c] = e[c])
            }), s[t.type] = t
        }, a.changeOrder = function (c, e) {
            var t = i(c);
            M.splice(t, 1), M.splice(e, 0, c)
        }, a.resetModifications = function () {
            M = n(p), s = {}
        }, a.types = {
            VISA: "visa",
            MASTERCARD: "mastercard",
            AMERICAN_EXPRESS: "american-express",
            DINERS_CLUB: "diners-club",
            DISCOVER: "discover",
            JCB: "jcb",
            UNIONPAY: "unionpay",
            MAESTRO: "maestro",
            ELO: "elo",
            MIR: "mir"
        }, c.exports = a
    },
    852: function (c, e, t) {
        var n = t(17)(t(834), t(875), null, null);
        c.exports = n.exports
    },
    875: function (c, e) {
        c.exports = {
            render: function () {
                var c = this,
                    e = c.$createElement,
                    t = c._self._c || e;
                return t("div", {
                    staticClass: "box-movie-detail"
                }, [t("div", {
                    staticClass: "container"
                }, [t("div", {
                    staticClass: "row"
                }, [t("div", {
                    staticClass: "col-md-10 col-md-offset-1"
                }, [t("div", {
                    staticClass: "detail-box clearfix"
                }, [t("div", {
                    staticClass: "poster"
                }, [t("img", {
                    attrs: {
                        src: c.showtime.movie.image_url.port + "=w260"
                    }
                })]), t("div", {
                    staticClass: "movie-detail"
                }, [t("div", {
                    staticClass: "main-detail"
                }, [t("h1", {
                    staticClass: "name"
                }, [c._v(c._s(c.showtime.movie.name[c.app.lang]))]), t("ul", {
                    staticClass: "movie-detail-list movie-date-time"
                }, [t("li", {
                    staticClass: "list-item"
                }, [t("span", {
                    staticClass: "date"
                }, [c._v(c._s(c.formatDateUnixTime(c.showtime.session.start_time, "DD MMMM YYYY")))])]), t("li", {
                    staticClass: "list-item"
                }, [t("span", {
                    staticClass: "time"
                }, [c._v(c._s(c.showtime.session.time_text))])])])]), c.showtime.cinema ? t("p", {
                    staticClass: "cinema"
                }, [t("sf-icon", {
                    attrs: {
                        type: "location"
                    }
                }), c._v(" " + c._s(c.showtime.cinema.name[c.app.lang]) + "\n                        ")], 1) : c._e(), t("ul", {
                    staticClass: "movie-detail-list movie-theater"
                }, [c._l(c.showtime.tags, function (e, n) {
                    return ["theater" === e.type_desc ? t("li", {
                        key: n,
                        staticClass: "list-item theater"
                    }, [t("span", {
                        staticClass: "cinema-text"
                    }, [c._v(c._s(c.language.cinema[c.app.lang]))]), t("span", {
                        staticClass: "cinema-number"
                    }, [c._v(c._s(c.cinemaNumber))])]) : "theater_special" === e.type_desc ? t("li", {
                        key: n,
                        staticClass: "list-item theater-special"
                    }, [t("img", {
                        attrs: {
                            src: e.image.url,
                            alt: ""
                        }
                    })]) : "language_audio" === e.type_desc ? t("li", {
                        key: n,
                        staticClass: "list-item"
                    }, [t("sf-icon", {
                        attrs: {
                            type: "sound"
                        }
                    }), c._v(" " + c._s(e.name[c.app.lang]))], 1) : "language_subtitle" === e.type_desc ? t("li", {
                        key: n,
                        staticClass: "list-item"
                    }, [t("sf-icon", {
                        attrs: {
                            type: "sub"
                        }
                    }), c._v(" " + c._s(e.name[c.app.lang]))], 1) : "format_sound" === e.type_desc ? t("li", {
                        key: n,
                        staticClass: "list-item"
                    }, ["image" === e.type ? t("img", {
                        attrs: {
                            src: e.image.url,
                            alt: ""
                        }
                    }) : c._e()]) : c._e()]
                })], 2), c.selected && Object.keys(c.selected).length ? t("div", {
                    staticClass: "summary-selected-seat"
                }, [t("div", {
                    staticClass: "selected-seat"
                }, [t("h3", {
                    staticClass: "heading"
                }, [c._v(c._s(c.language.selected_seat[c.app.lang]))]), t("p", [c._v(c._s(c.selectedSeats.join(", ")))])]), t("div", {
                    staticClass: "selected-seat-total"
                }, [c.isPromotionPrice ? [t("h3", {
                    staticClass: "heading"
                }, [c._v(c._s("en" === c.app.lang ? "Discounted Price" : "ราคารวมส่วนลด"))])] : [t("h3", {
                    staticClass: "heading"
                }, [c._v(c._s(c.language.total[c.app.lang]))])], t("p", [c._v(c._s(c.priceFormat(c.selected.price_all)) + " " + c._s(c.language.thb[c.app.lang]))])], 2)]) : c._e()])])])])])])
            },
            staticRenderFns: []
        }
    },
    893: function (c, e, t) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var n = t(7),
            o = t.n(n),
            a = t(2),
            i = t.n(a),
            M = t(25),
            r = t(1),
            s = t.n(r);
        e.default = {
            data: function () {
                return {
                    toggleConcession: !1
                }
            },
            props: ["booking", "showtime"],
            computed: i()({}, t.i(M.a)(["app", "language", "concession_list"]), {
                selectedSeats: function () {
                    if (o()(this.booking.selected).length) {
                        return this.booking.selected.seats.map(function (c) {
                            return c.code
                        })
                    }
                    return []
                },
                totalPrice: function () {
                    var c = this,
                        e = 0;
                    return this.booking.concession && o()(this.booking.concession).length && o()(this.concession_list.item).length && o()(this.booking.concession).map(function (t) {
                        e += c.concession_list.item[t].price * c.booking.concession[t]
                    }), e
                },
                totalQty: function () {
                    var c = this,
                        e = 0;
                    return this.booking.concession && o()(this.booking.concession).length && o()(this.concession_list.item).length && o()(this.booking.concession).map(function (t) {
                        e += c.booking.concession[t]
                    }), e
                }
            }),
            methods: {
                formatDateTime: function (c, e) {
                    return s.a.locale(this.app.lang), s()(c).format(e)
                },
                priceFormat: function (c) {
                    for (;
                        /(\d+)(\d{3})/.test(c.toString());) c = c.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                    return c
                }
            }
        }
    },
    941: function (c, e, t) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
                value: !0
            }),
            function (c) {
                var n = t(339),
                    o = t.n(n),
                    a = t(7),
                    i = t.n(a),
                    M = t(2),
                    r = t.n(M),
                    s = t(5),
                    p = t.n(s),
                    l = t(1),
                    b = t.n(l),
                    d = t(340),
                    z = t.n(d),
                    A = t(6),
                    u = t(25),
                    f = t(149),
                    m = t(795),
                    L = t.n(m),
                    O = t(785),
                    q = t(852),
                    h = t.n(q),
                    N = t(993),
                    W = t.n(N),
                    X = t(806),
                    g = t.n(X),
                    T = t(776),
                    B = (t(847), t(846)),
                    C = {
                        en: {
                            attributes: {
                                email: "Email address",
                                mobile: "Mobile",
                                pin: "PIN",
                                another_card_no: "Card number",
                                another_card_pin: "PIN"
                            },
                            custom: {
                                pin: {
                                    required: "Please enter 4-digit PIN code",
                                    length: "Please enter 4-digit PIN code"
                                },
                                another_card_pin: {
                                    required: "Please enter 4-digit PIN code",
                                    length: "Please enter 4-digit PIN code"
                                }
                            }
                        },
                        th: {
                            attributes: {
                                email: "อีเมล",
                                mobile: "เบอร์โทรศัพท์มือถือ",
                                pin: "รหัส PIN",
                                another_card_no: "หมายเลขบัตร",
                                another_card_pin: "รหัส PIN"
                            },
                            custom: {
                                pin: {
                                    required: "กรอกรหัส PIN เป็นตัวเลข 4 หลัก",
                                    length: "กรอกรหัส PIN เป็นตัวเลข 4 หลัก"
                                },
                                another_card_pin: {
                                    required: "กรอกรหัส PIN เป็นตัวเลข 4 หลัก",
                                    length: "กรอกรหัส PIN เป็นตัวเลข 4 หลัก"
                                }
                            }
                        }
                    };
                f.b.localize(C), e.default = {
                    props: ["data"],
                    title: function () {
                        return this.language.payment[this.app.lang]
                    },
                    data: function () {
                        return {
                            currentTab: "buy",
                            customerEmail: "",
                            customerPhone: "",
                            selectedData: "",
                            types: "",
                            payment_method: "sf-card",
                            paymentForm: "",
                            purchaseTimeLeft: "00:00",
                            countDown: "",
                            seatMapObj: {},
                            showCreditCard: !0,
                            showSFCard: !0,
                            formErrors: {},
                            formErrors2: {},
                            formErrors3: {},
                            formErrors4: {},
                            payWithSFCard: !1,
                            anotherSFCard: !1,
                            pin: "",
                            anotherCardNo: "",
                            anotherCardPin: "",
                            anotherCardNoText: {
                                en: "16-digit card number",
                                th: "หมายเลขบัตร 16 หลัก"
                            },
                            cardName: "",
                            cardType: "",
                            cardNumber: "",
                            cardExpiration: "",
                            cardCVV: "",
                            rememberCard: !1,
                            creditCardListData: {},
                            selectedCreditCard: null,
                            creditCardError: {
                                en: "Credit card not found",
                                th: "หมายเลขเครดิตการ์ดไม่ถูกต้อง"
                            },
                            rememberCardInfo: {
                                en: "<p>'Remember card' feature is an option at Checkout that allows you to save your card information for later use. However, for security reasons, you will still have to perform an OTP SMS process to complete the purchase.</p><p>We take your privacy and data security seriously. SF will not store any card information on our server at any time.</p>",
                                th: "<p>ฟีเจอร์ 'Remember card' ช่วยให้คุณสามารถบันทึกข้อมูลบัตรเพื่อจดจำและใช้ในครั้งถัดไปได้ อย่างไรก็ตามเพื่อเพิ่มความปลอดภัย คุณยังคงต้องทำกระบวนการ OTP SMS เพื่อทำการจบรายการซื้ออย่างสมบูรณ์</p><p>เรารักษาความเป็นส่วนตัวและความปลอดภัยของข้อมูลลูกค้าอย่างจริงจัง SF จะไม่เก็บข้อมูลบัตร และรักษาความปลอดภัยโดย K-Payment Gateway<p>"
                            },
                            cinemaDetailData: {},
                            promotionCreditCard: null,
                            promotionCreditCardFound: !1
                        }
                    },
                    components: {
                        StepBar: g.a,
                        BoxMovieDetail: h.a,
                        BuyConcession: W.a,
                        "no-ssr": L.a
                    },
                    computed: r()({}, t.i(u.a)(["app", "route", "time", "user", "language", "showtime_data", "booking", "concession_list", "blacklist"]), {
                        getPhoneNumber: function () {
                            return "" === this.customerPhone && i()(this.user.info).length && (this.customerPhone = this.user.info.mobile_number || ""), this.customerPhone
                        },
                        getEmail: function () {
                            return "" === this.customerEmail && i()(this.user.info).length && (this.user.info.providerData ? this.customerEmail = this.user.info.providerData.email || "" : this.customerEmail = this.user.info.email || ""), this.customerEmail
                        },
                        isLogedIn: function () {
                            return !(!i()(this.user.info).length || this.user.info.isAnonymous)
                        },
                        reserveTime: function () {
                            var c = b()().add(45, "minute"),
                                e = b.a.unix(this.showtime_data.session.start_time);
                            return !!b()(c).isBefore(e)
                        },
                        selectedSeats: function () {
                            if (i()(this.booking.selected).length) {
                                return this.booking.selected.seats.map(function (c) {
                                    return c.code
                                })
                            }
                            return []
                        },
                        isSessionMaximumReserve: function () {
                            var c = !1;
                            if (i()(this.seatMapObj).length && i()(this.app).length) {
                                var e = this.seatMapObj.n_seat * this.app.settings.max_reserve_factor;
                                this.seatMapObj.n_seat_reserved + this.booking.selected.seats.length > e && (c = !0)
                            }
                            return c
                        },
                        isPaidOnly: function () {
                            return this.showtime_data.session.paid_only || !1
                        },
                        totalPrice: function () {
                            var c = this,
                                e = 0;
                            return i()(this.booking.selected).length && (e = this.booking.selected.price_all), this.booking.concession && i()(this.booking.concession).length > 0 && i()(this.concession_list.item).length && i()(this.booking.concession).map(function (t) {
                                e += c.concession_list.item[t].price * c.booking.concession[t]
                            }), e
                        },
                        hasCard: function () {
                            return !(!this.user.sf_movie_club || !i()(this.user.sf_movie_club).length)
                        },
                        isPromotionPrice: function () {
                            return !!(i()(this.booking.selected).length && this.booking.selected.ticket_types && this.booking.selected.ticket_types.length && this.booking.selected.ticket_types.filter(function (c) {
                                return c.is_special_price || c.promo_session_id
                            }).length)
                        },

                    }),
                    methods: r()({}, t.i(u.b)(["fetchConcessionList", "addBookingType", "clearBookingType", "addSelectedData", "addPurchaseComplete", "addMachine", "cancelOrder", "addCustomerEmail", "addCustomerPhone", "addUserLang", "isLoading", "fetchBlacklist", "updateEmailAndMobileNumber", "openPopup"]), {
                        setPhoneNumber: function (c) {
                            this.customerPhone = c.target.value
                        },
                        setEmail: function (c) {
                            this.customerEmail = c.target.value
                        },
                        getMachine: function () {
                            var c = this;
                            A.a.ref("TASK/worker_count").orderByValue().limitToFirst(1).once("value", function (e) {
                                c.machine = i()(e.val()), c.addMachine(c.machine[0])
                            })
                        },
                        reserveTicket: function () {
                            var c = this;
                            !(this.selectedSeats.length < this.app.settings.max_reserve_seat) || this.isSessionMaximumReserve || this.booking.concession && 0 !== i()(this.booking.concession).length || !this.isLogedIn || this.blacklist.is_blacklist || this.isPaidOnly || this.isPromotionPrice || (this.isLoading(!0), this.machine[0] && this.getMachine(), this.addBookingType("reserve"), this.addUserLang(this.app.lang), this.updateEmailAndMobileNumber({
                                email: this.customerEmail,
                                mobile_number: this.customerPhone
                            }).then(function () {
                                c.completeKey = A.a.ref("TASK/input/reserve_ticket").child(c.machine[0]).push(r()({}, c.booking.selected, {
                                    user_key: c.user.info.uid,
                                    time_created: A.b.database.ServerValue.TIMESTAMP
                                })).key, c.reserveOutput = A.a.ref("TASK/output/reserve_ticket").child(c.machine[0]).child(c.completeKey), c.reserveOutput.on("value", function (e) {
                                    if (e.exists()) {
                                        var t = e.val();
                                        t && (c.isLoading(!1), c.reserveOutput && c.reserveOutput.off("value"), t.success ? (window.dataLayer = window.dataLayer || [], window.dataLayer.push({
                                            event: "makePurchase",
                                            purchaseType: "Reserve"
                                        }), "PaymentFacebook" === c.$route.name ? c.$router.push({
                                            name: "PurchaseCompleteFacebook"
                                        }) : c.$router.push({
                                            name: "PurchaseComplete"
                                        })) : T.alert("", t.reason[c.app.lang]))
                                    }
                                })
                            }))
                        },
                        buyTicket: function () {
                            var c = this;
                            this.disableBuyTicket || (this.isLoading(!0), this.machine[0] && this.getMachine(), this.addBookingType("buy"), this.addUserLang(this.app.lang), this.updateEmailAndMobileNumber({
                                email: this.customerEmail,
                                mobile_number: this.customerPhone
                            }).then(function () {
                                if (0 === c.totalPrice) c.completeKey = A.a.ref("TASK/input/confirm_ticket").child(c.machine[0]).push(r()({}, c.booking.selected, {
                                    user_key: c.user.info.uid,
                                    time_created: A.b.database.ServerValue.TIMESTAMP
                                })).key, c.paymentFreePrice = A.a.ref("TASK/output/confirm_ticket").child(c.machine[0]).child(c.completeKey), c.paymentFreePrice.on("value", function (e) {
                                    if (e.exists()) {
                                        var t = e.val();
                                        t && (c.isLoading(!1), c.paymentFreePrice && c.paymentFreePrice.off("value"), t.success ? (window.dataLayer = window.dataLayer || [], window.dataLayer.push({
                                            event: "makePurchase",
                                            purchaseType: "Zero Ticket"
                                        }), "PaymentFacebook" === c.$route.name ? c.$router.push({
                                            name: "PurchaseCompleteFacebook"
                                        }) : c.$router.push({
                                            name: "PurchaseComplete"
                                        })) : T.alert("", t.reason[c.app.lang]))
                                    }
                                });
                                else if ("credit-card" === c.payment_method) {
                                    c.$router.push({
                                        name: "Payment",
                                        query: {
                                            method: "credit-card"
                                        }
                                    });
                                    var e = "https://dev-kpaymentgateway-services.kasikornbank.com/card/v2/token",
                                        n = "pkey_test_4yjnn1eMIUVRFuYKbnRKrVIKAzUC2r3vy";
                                    e = "https://kpaymentgateway-services.kasikornbank.com/card/v2/token", n = i()(c.cinemaDetailData).length ? "WWW.SFCINEMACITY.COM-CORP" === c.cinemaDetailData.comp ? "pkey_prod_28762d1qHiwLp2PDXNf7ekjDw16GJkNuOb" : "WWW.SFCINEMACITY.COM-BYI" === c.cinemaDetailData.comp ? "pkey_prod_30R4SkbZ1ulJKKa3jqdLObv5BZfxOjeguC" : "WWW.SFCINEMACITY.COM-UBN" === c.cinemaDetailData.comp ? "pkey_prod_29yIqRAOc9ccNtgjA2y3Cv6uTpAjJu7JiC" : "pkey_prod_28762d1qHiwLp2PDXNf7ekjDw16GJkNuOb" : "pkey_prod_28762d1qHiwLp2PDXNf7ekjDw16GJkNuOb", null !== c.selectedCreditCard ? i()(c.creditCardListData).length && c.creditCardListData.customer_id && c.creditCardListData.cards && c.creditCardListData.cards[c.selectedCreditCard] && i()(c.creditCardListData.cards[c.selectedCreditCard]).length && (n ? z()({
                                        method: "post",
                                        url: e,
                                        data: {
                                            mode: "customer",
                                            customer: {
                                                customer_id: c.creditCardListData.customer_id,
                                                card_id: c.creditCardListData.cards[c.selectedCreditCard].id
                                            }
                                        },
                                        headers: {
                                            "Cache-Control": "no-cache",
                                            "x-api-key": n
                                        }
                                    }).then(function (e) {
                                        c.payWithCreditCardDirect({
                                            token: e.data.id,
                                            customer_id: c.creditCardListData.customer_id,
                                            card_id: c.creditCardListData.cards[c.selectedCreditCard].id
                                        })
                                    }).catch(function (e) {
                                        c.isLoading(!1), T.alert("", c.creditCardError[c.app.lang])
                                    }) : (c.isLoading(!1), T.alert("", c.creditCardError[c.app.lang]))) : n ? c.validator4.validateAll({
                                        card_name: c.cardName,
                                        card_number: c.cardNumber,
                                        card_cvv: c.cardCVV,
                                        card_expiration: c.cardExpiration
                                    }).then(function (t) {
                                        if (t) {
                                            var o = c.cardExpiration.split(""),
                                                a = o[0] + o[1],
                                                i = "20" + o[2] + o[3];
                                            z()({
                                                method: "post",
                                                url: e,
                                                data: {
                                                    mode: "fullpan",
                                                    card: {
                                                        name: c.cardName,
                                                        number: c.cardNumber,
                                                        expmonth: a,
                                                        expyear: i,
                                                        cvv: c.cardCVV
                                                    }
                                                },
                                                headers: {
                                                    "Cache-Control": "no-cache",
                                                    "x-api-key": n
                                                }
                                            }).then(function (e) {
                                                c.payWithCreditCardDirect({
                                                    token: e.data.id,
                                                    save_card: c.rememberCard
                                                })
                                            }).catch(function (e) {
                                                c.isLoading(!1), T.alert("", c.creditCardError[c.app.lang])
                                            })
                                        } else c.isLoading(!1)
                                    }) : (c.isLoading(!1), T.alert("", c.creditCardError[c.app.lang]))
                                } else if ("k-plus" === c.payment_method) c.$router.push({
                                    name: "Payment",
                                    query: {
                                        method: "k-plus"
                                    }
                                }), c.completeKey = A.a.ref("TASK/input/payment_kmobile").child(c.machine[0]).push(r()({}, c.booking.selected, {
                                    user_key: c.user.info.uid,
                                    time_created: A.b.database.ServerValue.TIMESTAMP
                                })).key, c.paymentKPlus = A.a.ref("TASK/output/payment_kmobile").child(c.machine[0]).child(c.completeKey), c.paymentKPlus.on("value", function (e) {
                                    if (e.exists()) {
                                        var t = e.val();
                                        t && (c.isLoading(!1), c.paymentKPlus && c.paymentKPlus.off("value"), t.success ? (c.paymentForm = t.form, window.dataLayer = window.dataLayer || [], window.dataLayer.push({
                                            event: "makePurchase",
                                            purchaseType: "K-mobile Banking"
                                        }), c.orderComplete = A.a.ref("TASK/order_complete/" + t.order_no), c.orderComplete.on("value", function (e) {
                                            if (e.exists()) {
                                                var t = e.val();
                                                t && (t.success ? "PaymentFacebook" === c.$route.name ? c.$router.push({
                                                    name: "PurchaseCompleteFacebook",
                                                    query: {
                                                        code: "00"
                                                    }
                                                }) : c.$router.push({
                                                    name: "PurchaseComplete",
                                                    query: {
                                                        code: "00"
                                                    }
                                                }) : t.error_code >= 200 ? T.alert("", t.reason[c.app.lang], function () {
                                                    c.stopCountdown(), c.$router.push({
                                                        name: "SelectSeat"
                                                    })
                                                }) : t.reason && T.alert("", t.reason[c.app.lang]))
                                            }
                                        })) : T.alert("", t.reason[c.app.lang]))
                                    }
                                });
                                else if ("sf-card" === c.payment_method)
                                    if (c.$router.push({
                                            name: "Payment",
                                            query: {
                                                method: "sf-card"
                                            }
                                        }), c.isLoading(!1), c.payWithSFCard = !0, c.hasCard) {
                                        var o = t.i(O.a)(null, c.time.diff_time),
                                            a = b()(c.user.sf_movie_club.expiry_date + " 23:59:59");
                                        a.diff(o) > 0 ? c.anotherSFCard = !1 : c.anotherSFCard = !0
                                    } else c.anotherSFCard = !0
                            }))
                        },
                        payWithCreditCardDirect: function (c) {
                            var e = this;
                            this.isLoading(!0), this.completeKey = A.a.ref("TASK/input/payment_credit_card_direct").child(this.machine[0]).push(r()({}, this.booking.selected, c, {
                                user_key: this.user.info.uid,
                                time_created: A.b.database.ServerValue.TIMESTAMP
                            })).key, this.paymentCreditCard = A.a.ref("TASK/output/payment_credit_card_direct").child(this.machine[0]).child(this.completeKey), this.paymentCreditCard.on("value", function (c) {
                                if (c.exists()) {
                                    var t = c.val();
                                    t && (e.paymentCreditCard && e.paymentCreditCard.off("value"), t.success ? (window.dataLayer = window.dataLayer || [], window.dataLayer.push({
                                        event: "makePurchase",
                                        purchaseType: "Credit Card"
                                    }), window.location = t.redirect_url) : (e.isLoading(!1), t.error_code >= 200 ? T.alert("", t.reason[e.app.lang], function () {
                                        e.stopCountdown(), e.$router.push({
                                            name: "SelectSeat"
                                        })
                                    }) : t.reason && T.alert("", t.reason[e.app.lang])))
                                }
                            })
                        },
                        payWithMovieClubCard: function () {
                            var c = this,
                                e = void 0;
                            e = !this.anotherSFCard && this.hasCard ? this.validator2.validateAll({
                                pin: this.pin
                            }) : this.validator3.validateAll({
                                another_card_no: this.anotherCardNo,
                                another_card_pin: this.anotherCardPin
                            }), e.then(function (e) {
                                if (e) {
                                    c.isLoading(!0);
                                    var t = {};
                                    t = !c.anotherSFCard && c.hasCard ? {
                                        card_no: c.user.sf_movie_club.card_no,
                                        pin: c.pin
                                    } : {
                                        card_no: c.anotherCardNo,
                                        pin: c.anotherCardPin
                                    }, c.completeKey = A.a.ref("TASK/input/payment_sf_movie_club").child(c.machine[0]).push(r()({}, c.booking.selected, {
                                        user_key: c.user.info.uid
                                    }, t, {
                                        time_created: A.b.database.ServerValue.TIMESTAMP
                                    })).key, c.paymentMovieClubCard = A.a.ref("TASK/output/payment_sf_movie_club").child(c.machine[0]).child(c.completeKey), c.paymentMovieClubCard.on("value", function (e) {
                                        if (e.exists()) {
                                            var t = e.val();
                                            t && (c.isLoading(!1), t.success ? (window.dataLayer = window.dataLayer || [], window.dataLayer.push({
                                                event: "makePurchase",
                                                purchaseType: "SF Movie Club Card"
                                            }), "PaymentFacebook" === c.$route.name ? c.$router.push({
                                                name: "PurchaseCompleteFacebook",
                                                query: {
                                                    code: "00"
                                                }
                                            }) : c.$router.push({
                                                name: "PurchaseComplete",
                                                query: {
                                                    code: "00"
                                                }
                                            })) : T.alert("", t.reason[c.app.lang]))
                                        }
                                    })
                                }
                            })
                        },

                        priceFormat: function (c) {
                            for (;
                                /(\d+)(\d{3})/.test(c.toString());) c = c.toString().replace(/(\d+)(\d{3})/, "$1,$2");
                            return c
                        },
                        checkShowtime: function () {
                            var c = b()(),
                                e = b.a.unix(this.showtime_data.session.start_time).add(10, "minutes");
                            return !b()(c).isAfter(e)
                        },

                        setCreditCardInput: function () {
                            var c = this;
                            new B(this.$refs.cardNumber, {
                                creditCard: !0,
                                numericOnly: !0,
                                blocks: [4, 4, 4, 4],
                                delimiter: " ",
                                onCreditCardTypeChanged: function (e) {
                                    c.cardType = e
                                },
                                onValueChanged: function (e) {
                                    c.cardNumber = e.target.rawValue
                                }
                            }), new B(this.$refs.cardExpiration, {
                                date: !0,
                                datePattern: ["m", "y"],
                                numericOnly: !0,
                                onValueChanged: function (e) {
                                    c.cardExpiration = e.target.rawValue
                                }
                            }), new B(this.$refs.cardCVV, {
                                numericOnly: !0,
                                blocks: [3],
                                onValueChanged: function (e) {
                                    c.cardCVV = e.target.rawValue
                                }
                            }), this.$refs.cardNumber.oninput = function (e) {
                                c.$emit("oninput", e.target.value)
                            }, this.$refs.cardExpiration.oninput = function (e) {
                                c.$emit("oninput", e.target.value)
                            }, this.$refs.cardCVV.oninput = function (e) {
                                c.$emit("oninput", e.target.value)
                            }
                        },
                        getCinemaDetail: function (c) {
                            var e = this;
                            return p.a.Promise(function (t, n) {
                                e.isLoading(!0), A.a.ref("api/1_0/cinemas_detail/" + c).once("value", function (c) {
                                    e.isLoading(!1);
                                    var n = c.val() || {};
                                    e.cinemaDetailData = n, t()
                                })
                            })
                        },
                        getCreditCardList: function () {
                            var c = this;
                            return p.a.Promise(function (e, t) {
                                c.isLoading(!0), A.a.ref("TASK/worker_count").orderByValue().limitToFirst(1).once("value", function (t) {
                                    var n = i()(t.val());
                                    c.getCreditCardListKey = A.a.ref("TASK/input/list_credit_cards").child(n[0]).push({
                                        user_key: c.user.info.uid,
                                        client: "www",
                                        language: c.app.lang,
                                        app_v: "0.0",
                                        device_model: navigator.userAgent
                                    }).key, c.getCreditCardListOutput = A.a.ref("TASK/output/list_credit_cards").child(n[0]).child(c.getCreditCardListKey), c.getCreditCardListOutput.on("value", function (t) {
                                        if (t.exists()) {
                                            var n = t.val();
                                            n && (c.getCreditCardListOutput && c.getCreditCardListOutput.off("value"), c.isLoading(!1), n.success ? (c.creditCardListData = n, n.cards && n.cards.length && (c.promotionCreditCard ? (c.selectedCreditCard = n.cards.findIndex(c.findMatchPromotionCreditCard), c.selectedCreditCard < 0 && (c.promotionCreditCardFound = !0)) : c.user.default_credit_card ? (c.selectedCreditCard = n.cards.findIndex(function (e) {
                                                return c.user.default_credit_card === e.card_masking
                                            }), c.selectedCreditCard < 0 && (c.selectedCreditCard = 0)) : c.selectedCreditCard = 0, c.selectedCreditCard > 0 && (c.creditCardListData.cards = [r()({}, n.cards[c.selectedCreditCard])].concat(o()(n.cards.filter(function (e, t) {
                                                return t !== c.selectedCreditCard
                                            }))), c.selectedCreditCard = 0))) : c.creditCardListData = {}, e())
                                        }
                                    })
                                })
                            })
                        },
                        findMatchPromotionCreditCard: function (c) {
                            if (this.promotionCreditCard) {
                                var e = this.promotionCreditCard.substring(0, 6),
                                    t = this.promotionCreditCard.substring(this.promotionCreditCard.length - 4),
                                    n = c.card_masking.substring(0, 6),
                                    o = c.card_masking.substring(c.card_masking.length - 4);
                                return e === n && t === o
                            }
                            return !0
                        },
                        openPopupRememberInfo: function () {
                            T.alert("", this.rememberCardInfo[this.app.lang]).set("label", this.language.close[this.app.lang])
                        }
                    }),
                    watch: {
                        $route: function () {
                            "sf-card" !== this.$route.query.method && (this.payWithSFCard = !1)
                        },
                        route: function () {
                            "k-plus" === this.route.from.query.method && (this.paymentForm = "", this.paymentCreditCard && this.paymentCreditCard.off("value"), this.orderComplete && this.orderComplete.off("value"))
                        },
                        paymentForm: function (e) {
                            var t = this;
                            e && "credit-card" === this.payment_method && setTimeout(function () {
                                t.isLoading({
                                    action: !1,
                                    delay: 5e3
                                }), c("#ticket-payment form").submit()
                            }, 0)
                        },
                        customerEmail: function (c) {
                            this.addCustomerEmail(c), this.validator.validate("email", c).then(function () {}).catch(function () {})
                        },
                        customerPhone: function (c) {
                            this.addCustomerPhone(c), this.validator.validate("mobile", c).then(function () {}).catch(function () {})
                        },
                        isLogedIn: function () {
                            this.isLogedIn && this.fetchBlacklist(this.user.info.uid), this.getCreditCardList()
                        },
                        pin: function (c) {
                            this.validator2.validate("pin", c).then(function () {}).catch(function () {})
                        },
                        anotherCardNo: function (c) {
                            this.validator3.validate("another_card_no", c).then(function () {}).catch(function () {})
                        },
                        anotherCardPin: function (c) {
                            this.validator3.validate("another_card_pin", c).then(function () {}).catch(function () {})
                        },
                        cardName: function (c) {
                            this.validator4.validate("card_name", c).then(function () {}).catch(function () {})
                        },
                        cardNumber: function (c) {
                            this.validator4.validate("card_number", c).then(function () {}).catch(function () {})
                        },
                        cardCVV: function (c) {
                            this.validator4.validate("card_cvv", c).then(function () {}).catch(function () {})
                        },
                        cardExpiration: function (c) {
                            this.validator4.validate("card_expiration", c).then(function () {}).catch(function () {})
                        },
                        payment_method: function (c) {
                            var e = this;
                            "credit-card" === c && (this.cardName = "", this.cardType = "", this.cardNumber = "", this.cardExpiration = "", this.cardCVV = "", this.rememberCard = !1, this.$nextTick(function () {
                                e.promotionCreditCardFound && (e.selectedCreditCard = null, e.$refs.cardNumber.value = e.promotionCreditCard), e.setCreditCardInput()
                            }))
                        }
                    },
                    mounted: function () {
                        var c = this;
                        this.clearBookingType(), this.isLogedIn && this.fetchBlacklist(this.user.info.uid), this.isLoading(!0);
                        var e = this.booking.selected.session_key;
                        e ? (this.resultSetSeat = A.a.ref("TASK/output/seat_select"), A.a.ref("api/1_0/seat_map").child(e).once("value", function (e) {
                            c.isLoading(!1), e.exists() && (c.seatMapObj = e.val()), p.a.all([c.getCreditCardList(), c.getCinemaDetail(c.showtime_data.cinema.id)])
                        }), this.fetchConcessionList(e.split("-")[0])) : (this.isLoading(!1), p.a.all([this.getCreditCardList(), this.getCinemaDetail(this.showtime_data.cinema.id)])), "credit-card" === this.payment_method && this.$nextTick(function () {
                            c.setCreditCardInput()
                        }), "PurchaseComplete" !== this.route.from.name && "PurchaseCompleteFacebook" !== this.route.from.name || !i()(this.booking.purchase_complete).length || !i()(this.user.info).length || this.user.info.isAnonymous || "00" !== this.$route.query.code ? i()(this.booking.selected).length ? this.getMachine() : "PaymentFacebook" === this.$route.name ? this.$router.push({
                            name: "SelectSeatFacebook",
                            params: {
                                session_key: e
                            }
                        }) : "paynow" === this.showtime_data.from ? this.$router.push({
                            name: "MyBooking"
                        }) : this.$router.push({
                            name: "SelectSeat"
                        }) : this.$router.push({
                            name: "MyBooking"
                        }), this.validator = new f.b({
                            email: "required|email",
                            mobile: "required|numeric|length:10"
                        }), this.$set(this, "formErrors", this.validator.errors), this.validator2 = new f.b({
                            pin: "required|numeric|length:4"
                        }), this.$set(this, "formErrors2", this.validator2.errors), this.validator3 = new f.b({
                            another_card_no: "required|numeric|max:16",
                            another_card_pin: "required|numeric|length:4"
                        }), this.$set(this, "formErrors3", this.validator3.errors), this.validator4 = new f.b({
                            card_name: "required",
                            card_number: "required|numeric|max:16",
                            card_cvv: "required|numeric|length:3",
                            card_expiration: "required|numeric|length:4"
                        }), this.$set(this, "formErrors4", this.validator4.errors), this.startCountdown()
                    },
                    beforeDestroy: function () {
                        this.reserveOutput && this.reserveOutput.off("value"), this.completeTicket && this.completeTicket.off("value"), this.paymentFreePrice && this.paymentFreePrice.off("value"), this.paymentCreditCard && this.paymentCreditCard.off("value"), this.paymentKPlus && this.paymentKPlus.off("value"), this.paymentMovieClubCard && this.paymentMovieClubCard.off("value"), this.orderComplete && this.orderComplete.off("value"), this.getCreditCardListOutput && this.getCreditCardListOutput.off("value"), this.stopCountdown()
                    }
                }
            }.call(e, t(64))
    },
    993: function (c, e, t) {
        var n = t(17)(t(893), t(1075), null, null);
        c.exports = n.exports
    }
});