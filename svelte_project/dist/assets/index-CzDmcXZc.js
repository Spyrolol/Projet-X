var z=Object.defineProperty;var D=(e,t,n)=>t in e?z(e,t,{enumerable:!0,configurable:!0,writable:!0,value:n}):e[t]=n;var y=(e,t,n)=>(D(e,typeof t!="symbol"?t+"":t,n),n);(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))r(o);new MutationObserver(o=>{for(const i of o)if(i.type==="childList")for(const u of i.addedNodes)u.tagName==="LINK"&&u.rel==="modulepreload"&&r(u)}).observe(document,{childList:!0,subtree:!0});function n(o){const i={};return o.integrity&&(i.integrity=o.integrity),o.referrerPolicy&&(i.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?i.credentials="include":o.crossOrigin==="anonymous"?i.credentials="omit":i.credentials="same-origin",i}function r(o){if(o.ep)return;o.ep=!0;const i=n(o);fetch(o.href,i)}})();function h(){}function I(e){return e()}function S(){return Object.create(null)}function g(e){e.forEach(I)}function q(e){return typeof e=="function"}function M(e,t){return e!=e?t==t:e!==t||e&&typeof e=="object"||typeof e=="function"}function G(e){return Object.keys(e).length===0}function $(e,t){e.appendChild(t)}function F(e,t,n){e.insertBefore(t,n||null)}function O(e){e.parentNode&&e.parentNode.removeChild(e)}function x(e){return document.createElement(e)}function b(e){return document.createTextNode(e)}function H(){return b(" ")}function J(e,t,n,r){return e.addEventListener(t,n,r),()=>e.removeEventListener(t,n,r)}function Q(e,t,n){n==null?e.removeAttribute(t):e.getAttribute(t)!==n&&e.setAttribute(t,n)}function W(e){return Array.from(e.childNodes)}function X(e,t){t=""+t,e.data!==t&&(e.data=t)}let L;function p(e){L=e}const a=[],j=[];let d=[];const B=[],Y=Promise.resolve();let v=!1;function Z(){v||(v=!0,Y.then(K))}function E(e){d.push(e)}const w=new Set;let l=0;function K(){if(l!==0)return;const e=L;do{try{for(;l<a.length;){const t=a[l];l++,p(t),ee(t.$$)}}catch(t){throw a.length=0,l=0,t}for(p(null),a.length=0,l=0;j.length;)j.pop()();for(let t=0;t<d.length;t+=1){const n=d[t];w.has(n)||(w.add(n),n())}d.length=0}while(a.length);for(;B.length;)B.pop()();v=!1,w.clear(),p(e)}function ee(e){if(e.fragment!==null){e.update(),g(e.before_update);const t=e.dirty;e.dirty=[-1],e.fragment&&e.fragment.p(e.ctx,t),e.after_update.forEach(E)}}function te(e){const t=[],n=[];d.forEach(r=>e.indexOf(r)===-1?t.push(r):n.push(r)),n.forEach(r=>r()),d=t}const _=new Set;let ne;function R(e,t){e&&e.i&&(_.delete(e),e.i(t))}function re(e,t,n,r){if(e&&e.o){if(_.has(e))return;_.add(e),ne.c.push(()=>{_.delete(e),r&&(n&&e.d(1),r())}),e.o(t)}else r&&r()}function oe(e){e&&e.c()}function T(e,t,n){const{fragment:r,after_update:o}=e.$$;r&&r.m(t,n),E(()=>{const i=e.$$.on_mount.map(I).filter(q);e.$$.on_destroy?e.$$.on_destroy.push(...i):g(i),e.$$.on_mount=[]}),o.forEach(E)}function U(e,t){const n=e.$$;n.fragment!==null&&(te(n.after_update),g(n.on_destroy),n.fragment&&n.fragment.d(t),n.on_destroy=n.fragment=null,n.ctx=[])}function ie(e,t){e.$$.dirty[0]===-1&&(a.push(e),Z(),e.$$.dirty.fill(0)),e.$$.dirty[t/31|0]|=1<<t%31}function V(e,t,n,r,o,i,u=null,f=[-1]){const m=L;p(e);const s=e.$$={fragment:null,ctx:[],props:i,update:h,not_equal:o,bound:S(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(m?m.$$.context:[])),callbacks:S(),dirty:f,skip_bound:!1,root:t.target||m.$$.root};u&&u(s.root);let N=!1;if(s.ctx=n?n(e,t.props||{},(c,A,...C)=>{const P=C.length?C[0]:A;return s.ctx&&o(s.ctx[c],s.ctx[c]=P)&&(!s.skip_bound&&s.bound[c]&&s.bound[c](P),N&&ie(e,c)),A}):[],s.update(),N=!0,g(s.before_update),s.fragment=r?r(s.ctx):!1,t.target){if(t.hydrate){const c=W(t.target);s.fragment&&s.fragment.l(c),c.forEach(O)}else s.fragment&&s.fragment.c();t.intro&&R(e.$$.fragment),T(e,t.target,t.anchor),K()}p(m)}class k{constructor(){y(this,"$$");y(this,"$$set")}$destroy(){U(this,1),this.$destroy=h}$on(t,n){if(!q(n))return h;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(n),()=>{const o=r.indexOf(n);o!==-1&&r.splice(o,1)}}$set(t){this.$$set&&!G(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}const ue="4";typeof window<"u"&&(window.__svelte||(window.__svelte={v:new Set})).v.add(ue);function se(e){let t,n,r,o,i;return{c(){t=x("button"),n=b("count is "),r=b(e[0])},m(u,f){F(u,t,f),$(t,n),$(t,r),o||(i=J(t,"click",e[1]),o=!0)},p(u,[f]){f&1&&X(r,u[0])},i:h,o:h,d(u){u&&O(t),o=!1,i()}}}function ce(e,t,n){let r=0;return[r,()=>{n(0,r+=1)}]}class fe extends k{constructor(t){super(),V(this,t,ce,se,M,{})}}function le(e){let t,n,r,o,i;return o=new fe({}),{c(){t=x("main"),n=x("h1"),n.textContent=`${ae}`,r=H(),oe(o.$$.fragment),Q(n,"class","svelte-9noqbk")},m(u,f){F(u,t,f),$(t,n),$(t,r),T(o,t,null),i=!0},p:h,i(u){i||(R(o.$$.fragment,u),i=!0)},o(u){re(o.$$.fragment,u),i=!1},d(u){u&&O(t),U(o)}}}const ae="Bienvenu icite";class de extends k{constructor(t){super(),V(this,t,null,le,M,{})}}new de({target:document.getElementById("app")});
