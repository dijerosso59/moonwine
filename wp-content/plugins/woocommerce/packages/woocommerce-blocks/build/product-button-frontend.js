(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[59],{114:function(t,e,c){"use strict";c.d(e,"a",(function(){return o})),c(103);var n=c(44);const o=()=>n.m>1},136:function(t,e,c){"use strict";c.d(e,"c",(function(){return i})),c.d(e,"d",(function(){return l})),c.d(e,"b",(function(){return u})),c.d(e,"a",(function(){return d}));var n=c(70),o=c(114),r=c(52),s=c(61);const a=t=>Object(r.a)(t)?JSON.parse(t)||{}:Object(s.a)(t)?t:{},i=t=>{if(!Object(o.a)()||"function"!=typeof n.__experimentalGetSpacingClassesAndStyles)return{style:{}};const e=Object(s.a)(t)?t:{},c=a(e.style);return Object(n.__experimentalGetSpacingClassesAndStyles)({...e,style:c})},l=t=>{const e=Object(s.a)(t)?t:{},c=a(e.style),n=Object(s.a)(c.typography)?c.typography:{};return{style:{fontSize:e.fontSize?`var(--wp--preset--font-size--${e.fontSize})`:n.fontSize,lineHeight:n.lineHeight,fontWeight:n.fontWeight,textTransform:n.textTransform,fontFamily:e.fontFamily}}},u=t=>{if(!Object(o.a)())return{className:"",style:{}};const e=Object(s.a)(t)?t:{},c=a(e.style);return Object(n.__experimentalUseColorProps)({...e,style:c})},d=t=>{if(!Object(o.a)())return{className:"",style:{}};const e=Object(s.a)(t)?t:{},c=a(e.style);return Object(n.__experimentalUseBorderProps)({...e,style:c})}},348:function(t,e){},349:function(t,e,c){"use strict";c.d(e,"a",(function(){return l}));var n=c(0),o=c(7),r=c(5),s=c(18),a=c(31);const i=(t,e)=>{const c=t.find(t=>{let{id:c}=t;return c===e});return c?c.quantity:0},l=t=>{const{addItemToCart:e}=Object(o.useDispatch)(r.CART_STORE_KEY),{cartItems:c,cartIsLoading:l}=Object(a.a)(),{createErrorNotice:u,removeNotice:d}=Object(o.useDispatch)("core/notices"),[b,p]=Object(n.useState)(!1),y=Object(n.useRef)(i(c,t));return Object(n.useEffect)(()=>{const e=i(c,t);e!==y.current&&(y.current=e)},[c,t]),{cartQuantity:Number.isFinite(y.current)?y.current:0,addingToCart:b,cartIsLoading:l,addToCart:function(){let c=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1;return p(!0),e(t,c).then(()=>{d("add-to-cart")}).catch(t=>{u(Object(s.decodeEntities)(t.message),{id:"add-to-cart",context:"wc/all-products",isDismissible:!0})}).finally(()=>{p(!1)})}}}},401:function(t,e,c){"use strict";c.r(e);var n=c(11),o=c.n(n),r=c(0),s=c(4),a=c.n(s),i=c(1),l=c(40),u=c(349),d=c(18),b=c(44),p=c(2),y=c(43),f=c(120),O=(c(348),c(136));const j=t=>{let{product:e,colorStyles:c,borderStyles:n,typographyStyles:s,spacingStyles:y}=t;const{id:f,permalink:O,add_to_cart:j,has_options:m,is_purchasable:_,is_in_stock:g}=e,{dispatchStoreEvent:S}=Object(l.a)(),{cartQuantity:h,addingToCart:w,addToCart:k}=Object(u.a)(f,"woocommerce/single-product/"+(f||0)),N=Number.isFinite(h)&&h>0,C=!m&&_&&g,E=Object(d.decodeEntities)((null==j?void 0:j.description)||""),v=N?Object(i.sprintf)(
/* translators: %s number of products in cart. */
Object(i._n)("%d in cart","%d in cart",h,"woocommerce"),h):Object(d.decodeEntities)((null==j?void 0:j.text)||Object(i.__)("Add to cart","woocommerce")),x=C?"button":"a",T={};return C?T.onClick=()=>{k(),S("cart-add-item",{product:e});const{cartRedirectAfterAdd:t}=Object(p.getSetting)("productsSettings");t&&(window.location.href=b.c)}:(T.href=O,T.rel="nofollow",T.onClick=()=>{S("product-view-link",{product:e})}),Object(r.createElement)(x,o()({"aria-label":E,className:a()("wp-block-button__link","add_to_cart_button","wc-block-components-product-button__button",c.className,n.className,{loading:w,added:N}),style:{...c.style,...n.style,...s.style,...y.style},disabled:w},T),v)},m=t=>{let{colorStyles:e,borderStyles:c,typographyStyles:n,spacingStyles:o}=t;return Object(r.createElement)("button",{className:a()("wp-block-button__link","add_to_cart_button","wc-block-components-product-button__button","wc-block-components-product-button__button--placeholder",e.className,c.className),style:{...e.style,...c.style,...n.style,...o.style},disabled:!0})};e.default=Object(f.withProductDataContext)(t=>{const{className:e}=t,{parentClassName:c}=Object(y.useInnerBlockLayoutContext)(),{product:n}=Object(y.useProductDataContext)(),o=Object(O.b)(t),s=Object(O.a)(t),i=Object(O.d)(t),l=Object(O.c)(t);return Object(r.createElement)("div",{className:a()(e,"wp-block-button","wc-block-components-product-button",{[c+"__product-add-to-cart"]:c})},n.id?Object(r.createElement)(j,{product:n,colorStyles:o,borderStyles:s,typographyStyles:i,spacingStyles:l}):Object(r.createElement)(m,{colorStyles:o,borderStyles:s,typographyStyles:i,spacingStyles:l}))})},61:function(t,e,c){"use strict";c.d(e,"a",(function(){return n})),c.d(e,"b",(function(){return o}));const n=t=>!(t=>null===t)(t)&&t instanceof Object&&t.constructor===Object;function o(t,e){return n(t)&&e in t}}}]);