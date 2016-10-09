<?php 
define("current", "Index");
?>
<?php  require_once("header.php") ?>
<div id="desc">
<pre>
<a name="line1"> 1</a> <font color="#444444">//This is my personal description.</font>
<a name="line2"> 2</a> <font color="#444444">//By Yang Zhifei, 1303102, 1130310217</font>
<a name="line3"> 3</a> <font color="#444444">//School of Computer Science and Technology &amp;&amp; Honors School, HIT</font>
<a name="line4"> 4</a> <font color="0000ff"><strong>#include <font color="#008000">&lt;iostream&gt;</font></strong></font>
<a name="line5"> 5</a> <font color="0000ff"><strong>#include <font color="#008000">&lt;string&gt;</font></strong></font>
<a name="line6"> 6</a> <font color="0000ff"><strong>#include <font color="#008000">&lt;vector&gt;</font></strong></font>
<a name="line7"> 7</a> <strong>using</strong> <strong>namespace</strong> <font color="#2040a0">std</font><font color="4444FF">;</font>
<a name="line8"> 8</a> <strong>typedef</strong> <font color="#2040a0">vector</font><font color="4444FF">&lt;</font><font color="#2040a0">string</font><font color="4444FF">&gt;</font><font color="4444FF">:</font><font color="4444FF">:</font><font color="#2040a0">iterator</font> <font color="#2040a0">vsiter</font><font color="4444FF">;</font>
<a name="line9"> 9</a> 
<a name="line10">10</a> <strong>class</strong> <font color="#2040a0">ITPlayer</font><font color="4444FF"><strong>{</strong></font>
<a name="line11">11</a> 	<strong>public</strong><font color="4444FF">:</font>
<a name="line12">12</a> 	    <font color="#2040a0">ITPlayer</font><font color="4444FF">(</font><font color="4444FF">)</font> <font color="4444FF"><strong>{</strong></font><font color="4444FF"><strong>}</strong></font>
<a name="line13">13</a> 		<font color="#2040a0">ITPlayer</font><font color="4444FF">(</font><font color="#2040a0">string</font> <font color="#2040a0">_name</font>, <font color="#2040a0">string</font> <font color="#2040a0">_nickname</font>, <font color="#2040a0">string</font> <font color="#2040a0">_fakesex</font><font color="4444FF">)</font><font color="4444FF"><strong>{</strong></font>
<a name="line14">14</a> 			<font color="#2040a0">name</font> <font color="4444FF">=</font> <font color="#2040a0">_name</font><font color="4444FF">;</font> <font color="#2040a0">nickname</font> <font color="4444FF">=</font> <font color="#2040a0">_nickname</font><font color="4444FF">;</font>
<a name="line15">15</a> 			<font color="#2040a0">hobby</font>.<font color="#2040a0">push_back</font><font color="4444FF">(</font><font color="#2040a0">sex</font> <font color="4444FF">=</font> <font color="#2040a0">_fakesex</font>.<font color="#2040a0">c_str</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">+</font><font color="#2040a0">_fakesex</font>.<font color="#2040a0">length</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">-</font><font color="#FF0000">2</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line16">16</a> 		<font color="4444FF"><strong>}</strong></font>
<a name="line17">17</a> 		<strong>int</strong> <font color="#2040a0">setHobby</font><font color="4444FF">(</font><font color="#2040a0">string</font> <font color="#2040a0">s</font><font color="4444FF">)</font><font color="4444FF"><strong>{</strong></font>
<a name="line18">18</a>			<font color="#2040a0">hobby</font>.<font color="#2040a0">push_back</font><font color="4444FF">(</font><font color="#2040a0">s</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line19">19</a>			<strong>return</strong> <font color="#2040a0">s</font>.<font color="#2040a0">length</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line20">20</a> 		<font color="4444FF"><strong>}</strong></font>
<a name="line21">21</a> 		<font color="#2040a0">string</font> <font color="#2040a0">getName</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF"><strong>{</strong></font><strong>return</strong> <font color="#2040a0">name</font> <font color="4444FF">+</font> <font color="#008000">&quot;，网名&quot;</font> <font color="4444FF">+</font> <font color="#2040a0">nickname</font><font color="4444FF">;</font><font color="4444FF"><strong>}</strong></font>
<a name="line22">22</a> 		<font color="#2040a0">string</font> <font color="#2040a0">getSex</font><font color="4444FF">(</font><font color="4444FF">)</font> <font color="4444FF"><strong>{</strong></font>
<a name="line23">23</a>			<strong>for</strong><font color="4444FF">(</font><font color="#2040a0">vsiter</font> <font color="#2040a0">i</font> <font color="4444FF">=</font> <font color="#2040a0">hobby</font>.<font color="#2040a0">begin</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font> <font color="#2040a0">i</font> <font color="4444FF">!</font><font color="4444FF">=</font> <font color="#2040a0">hobby</font>.<font color="#2040a0">end</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font> <font color="#2040a0">i</font><font color="4444FF">+</font><font color="4444FF">+</font><font color="4444FF">)</font>
<a name="line24">24</a>				<strong>if</strong><font color="4444FF">(</font><font color="4444FF">*</font><font color="#2040a0">i</font> <font color="4444FF">=</font><font color="4444FF">=</font> <font color="#008000">&quot;女&quot;</font><font color="4444FF">)</font> <strong>return</strong> <font color="#008000">&quot;男&quot;</font><font color="4444FF">;</font>
<a name="line25">25</a>			<strong>return</strong> <font color="#008000">&quot;女&quot;</font><font color="4444FF">;</font>
<a name="line26">26</a> 		<font color="4444FF"><strong>}</strong></font>
<a name="line27">27</a>         <strong>void</strong> <font color="#2040a0">printHobby</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF"><strong>{</strong></font>
<a name="line28">28</a>             <font color="#2040a0">string</font> <font color="#2040a0">special</font><font color="4444FF">;</font>
<a name="line29">29</a>             <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#008000">&quot;爱好&quot;</font><font color="4444FF">;</font>
<a name="line30">30</a>             <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="4444FF">(</font><font color="4444FF">(</font><font color="#2040a0">getSex</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">=</font><font color="4444FF">=</font><font color="#008000">&quot;女&quot;</font><font color="4444FF">)</font>?<font color="4444FF">(</font><font color="#008000">&quot;男，&quot;</font><font color="4444FF">)</font><font color="4444FF">:</font><font color="4444FF">(</font><font color="#008000">&quot;女，&quot;</font><font color="4444FF">)</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line31">31</a>             <font color="#2040a0">getName</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">[</font><font color="#FF0000">2</font><font color="4444FF">]</font><font color="4444FF">=</font><font color="4444FF">=</font><font color="#FF0000">0xffffffd6</font> <font color="4444FF">&amp;</font><font color="4444FF">&amp;</font> <font color="#2040a0">getName</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">[</font><font color="#FF0000">3</font><font color="4444FF">]</font><font color="4444FF">=</font><font color="4444FF">=</font><font color="#FF0000">0xffffffbe</font> <font color="4444FF">&amp;</font><font color="4444FF">&amp;</font>
<a name="line32">32</a>             <font color="#2040a0">setHobby</font><font color="4444FF">(</font><font color="#2040a0">special</font> <font color="4444FF">=</font> <font color="#008000">&quot;各种技术，各种音乐&quot;</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line33">33</a>             <font color="#444444">//如果写上无聊时偶尔打LOL会不会显得太低端=_=</font>
<a name="line34">34</a>             <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#2040a0">special</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#2040a0">endl</font><font color="4444FF">;</font>
<a name="line35">35</a>         <font color="4444FF"><strong>}</strong></font>
<a name="line36">36</a>         <strong>void</strong> <font color="#2040a0">Ability</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF"><strong>{</strong></font>
<a name="line37">37</a>             <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#008000">&quot;特长：&quot;</font><font color="4444FF">;</font>
<a name="line38">38</a>             <strong>if</strong><font color="4444FF">(</font><font color="#2040a0">getName</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">[</font><font color="#FF0000">4</font><font color="4444FF">]</font><font color="4444FF">-</font><font color="#FF0000">0xffffffb7</font> <font color="4444FF">|</font><font color="4444FF">|</font> <font color="#2040a0">getName</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">[</font><font color="#FF0000">5</font><font color="4444FF">]</font><font color="4444FF">-</font><font color="#FF0000">0xffffffc9</font><font color="4444FF">)</font>
<a name="line39">39</a>                 <font color="#2040a0">ability</font>.<font color="#2040a0">push_back</font><font color="4444FF">(</font><font color="#008000">&quot;Zhuangbility&quot;</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line40">40</a>             <strong>else</strong> <font color="4444FF"><strong>{</strong></font>
<a name="line41">41</a>                 <font color="#2040a0">ability</font>.<font color="#2040a0">push_back</font><font color="4444FF">(</font><font color="#008000">&quot;钢琴，&quot;</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line42">42</a>                 <font color="#2040a0">ability</font>.<font color="#2040a0">push_back</font><font color="4444FF">(</font><font color="#008000">&quot;吉他及各种乱七八糟的乐器，&quot;</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line43">43</a>                 <font color="#2040a0">ability</font>.<font color="#2040a0">push_back</font><font color="4444FF">(</font><font color="#008000">&quot;以及考试临头也要熬夜写自己想写的代码的作死之心&quot;</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line44">44</a>             <font color="4444FF"><strong>}</strong></font>
<a name="line45">45</a>             <strong>for</strong><font color="4444FF">(</font><font color="#2040a0">vsiter</font> <font color="#2040a0">i</font> <font color="4444FF">=</font> <font color="#2040a0">ability</font>.<font color="#2040a0">begin</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font> <font color="#2040a0">i</font> <font color="4444FF">!</font><font color="4444FF">=</font> <font color="#2040a0">ability</font>.<font color="#2040a0">end</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font> <font color="#2040a0">i</font><font color="4444FF">+</font><font color="4444FF">+</font><font color="4444FF">)</font>
<a name="line46">46</a>                 <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="4444FF">*</font><font color="#2040a0">i</font><font color="4444FF">;</font>
<a name="line47">47</a>             <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#2040a0">endl</font><font color="4444FF">;</font>
<a name="line48">48</a>         <font color="4444FF"><strong>}</strong></font>
<a name="line49">49</a> 	<strong>private</strong><font color="4444FF">:</font>
<a name="line50">50</a> 		<font color="#2040a0">string</font> <font color="#2040a0">name</font>, <font color="#2040a0">nickname</font>, <font color="#2040a0">sex</font><font color="4444FF">;</font>
<a name="line51">51</a> 		<font color="#2040a0">vector</font><font color="4444FF">&lt;</font><font color="#2040a0">string</font><font color="4444FF">&gt;</font> <font color="#2040a0">hobby</font>, <font color="#2040a0">ability</font><font color="4444FF">;</font>
<a name="line52">52</a> 
<a name="line53">53</a> <font color="4444FF"><strong>}</strong></font><font color="4444FF">;</font>
<a name="line54">54</a> <strong>int</strong> <font color="#2040a0">main</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF"><strong>{</strong></font>
<a name="line55">55</a>     <font color="#2040a0">ITPlayer</font> <font color="#2040a0">Xivid</font><font color="4444FF">(</font><font color="#008000">&quot;杨志飞&quot;</font>, <font color="#008000">&quot;Xivid&quot;</font>, <font color="#008000">&quot;就不告诉你是男是女&quot;</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line56">56</a>     <font color="#2040a0">cout</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#2040a0">Xivid</font>.<font color="#2040a0">getName</font><font color="4444FF">(</font><font color="4444FF">)</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#008000">&quot;，&quot;</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#2040a0">Xivid</font>.<font color="#2040a0">getSex</font><font color="4444FF">(</font><font color="4444FF">)</font> <font color="4444FF">&lt;</font><font color="4444FF">&lt;</font> <font color="#2040a0">endl</font><font color="4444FF">;</font>
<a name="line57">57</a>     <font color="#2040a0">Xivid</font>.<font color="#2040a0">printHobby</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line58">58</a>     <font color="#2040a0">Xivid</font>.<font color="#2040a0">Ability</font><font color="4444FF">(</font><font color="4444FF">)</font><font color="4444FF">;</font>
<a name="line59">59</a>     <strong>return</strong> <font color="#FF0000">0</font><font color="4444FF">;</font>
<a name="line60">60</a> <font color="4444FF"><strong>}</strong></font>

</pre>
<div style="text-align: right"><a href="/blog/show.php?id=14">运行结果在这里</a></div>
<hr>
syntax highlighted by <a href="http://www.palfrader.org/code2html">Code2HTML</a>, v. 0.9.1
</div>
<div id="sidebar">
	<div class="widget" id="studyexpr">
		<div class="widname"><a href="/blog/show.php?id=12">学习经历</a></div>
		<div class="info">几门语言</div>
		<div class="info">几个竞赛</div>
		<div class="info">几个成就</div>
		<div class="more"><a href="/blog/show.php?id=12">查看详细……</a></div>
	</div>
	<div class="widget" id="projectexpr">
		<div class="widname"><a href="/blog/show.php?id=13">项目经历</a></div>
		<div class="info"><a href="/">本简历</a></div>
		<div class="info"><a href="http://ssecta.sinaapp.com">SSECTA</a></div>
		<div class="info"><a href="http://eat.vivid.name">食堂达人</a></div>
		<div class="more"><a href="/blog/show.php?id=13">查看详细……</a></div>
	</div>
	<div class="widget" id="interest">
		<div class="widname"><a href="/blog/show.php?id=15">兴趣所在</a></div>
		<div class="info">Web/Android/iOS开发</div>
		<div class="info">各种cool的技术</div>
		<div class="more"><a href="/blog/show.php?id=15">查看详细……</a></div>
	</div>
</div>
</div>
<?php  require_once("footer.php") ?>
</body>
</html>