<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

	<HEAD>
		<TITLE>收件箱</TITLE>
		<meta charset="utf-8" />
		<META http-equiv=Content-Type content="text/html; charset=gb2312">
		<LINK href="/Public/Web/main/css/globle_v1.css" type=text/css rel=stylesheet>
		<LINK href="/Public/Web/main/css/inbox.css" type=text/css rel=stylesheet>
		<link href="/Public/Web/main/css/skin_blue.css" rel="stylesheet" type="text/css" id="lnkSkin">

		<META content="MSHTML 6.00.6000.16809" name=GENERATOR>
	</HEAD>

	<BODY class="All_C_Page Inbox">
		<FORM id=oFormMessage action=# method=post>
			<INPUT id=oFormAction type=hidden>
			<DIV class=ContentWp>
				<DIV class=ContentThemeWp>
					<DIV class=gTitle>
						<B class=mTT>收件箱</B>&nbsp;&nbsp;(共&nbsp;
						<B id=oTotal>222</B>&nbsp;封，其中&nbsp;
						<A title="" href="#">未读邮件</A>&nbsp;
						<B class=fnt_Red id=oTotalUnRead>123</B>&nbsp;封)</DIV>
					<DIV class="gToolbar gTbrTop">
						<INPUT class="Btn BtnNml" hideFocus type=button value="删 除" outClass="Btn BtnNml ImpBtn" overClass="Btn BtnHv ImpBtn" action="move">
						<INPUT class="Btn BtnNml" hideFocus type=button value=举报垃圾邮件 outClass="Btn BtnNml" overClass="Btn BtnHv" action="reportYes">
						<SELECT class=Sel action="mark">
							<OPTION value=none selected>标记为...</OPTION>
							<OPTION value=read:true>&nbsp;&nbsp;已读邮件</OPTION>
							<OPTION value=read:false>&nbsp;&nbsp;未读邮件</OPTION>
						</SELECT>

						<SELECT class=Sel action="move">
							<OPTION value=none selected>移动到...</OPTION>
							<OPTION value=2>&nbsp;&nbsp;草稿箱</OPTION>
							<OPTION value=3>&nbsp;&nbsp;已发送</OPTION>
						</SELECT>

						<SELECT class=Sel action="view" url="#">
							<OPTION value=none selected>查看...</OPTION>
							<OPTION value=null>&nbsp;&nbsp;全部邮件</OPTION>
							<OPTION class=SelOptLine value=none>-------------</OPTION>
							<OPTION value=read:false>&nbsp;&nbsp;未读邮件</OPTION>
							<OPTION value=read:true>&nbsp;&nbsp;已读邮件</OPTION>
						</SELECT>
						<DIV class=Extra>
							<SPAN class=Txt><SPAN class=Unable>首页</SPAN>&nbsp;&nbsp;
							<SPAN class=Unable>上页</SPAN>&nbsp;&nbsp;
							<A href="#">下页</A>&nbsp;&nbsp;
							<A href="#">末页</A>
							</SPAN>
							<SELECT class=SelA style="MARGIN-RIGHT: 0px" action="page" url="#">
								<OPTION value=1 selected>&nbsp;&nbsp;1/2</OPTION>
							</SELECT>
						</DIV>
					</DIV>
					<DIV class=Ibx_Main_Wp>
						<TABLE class="Ibx_gTable F2Img Ibx_gTable_TT" id=oTableHead>
							<TBODY>
								<TR>
									<TH class=Ibx_Th_F></TH>
									<TH class=Ibx_Th_Chkbx>
										<INPUT id=oFormCheckAll title=全选/不选　本页所有邮件 type=checkbox>
									</TH>
									<TH class=Ibx_Th_icoInfo>
										<B class=icoIbx title=邮件类型></B>
									</TH>
									<TH class=Ibx_Th_From>发件人</TH>
									<TH class=Ibx_Th_icoFlag>
										<B class=icoIbx title=邮件标签></B>
									</TH>
									<TH class=Ibx_Th_Subject>主题</TH>
									<TH class=Ibx_Th_Date>日期</TH>
									<TH class=Ibx_Th_icoATCM>
										<B class=icoIbx title=附件标识></B>
									</TH>
									<TH class=Ibx_Th_Size>大小</TH>
								</TR>
								<TBODY></TBODY>
						</TABLE>
						<DIV class="Ibx_Lst_dWp dWpOpen">

							<TABLE class="Ibx_gTable Ibx_gTable_Con" id=oTableCOUNT0 action="list">
								<TBODY>
									<TR class="I_Mark0 I_UnRd">
										<TD class=Ibx_Td_F>&nbsp;</TD>
										<TD class=Ibx_Td_Chkbx>
											<INPUT title=选择/不选 type=checkbox value=379:xtbBew0ktUT-x2efHAAAs- name=mid time="1236940782000" index="0" read="false">
										</TD>
										<TD class=Ibx_Td_icoInfo>
											<B class="icoIbx " title=未读(点击设为已读) type="markread"></B>
										</TD>
										<TD class=Ibx_Td_From title='"Offsetsweden@sharmafields.com" <offsetsweden@sharmafields.com>'>
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_icoFlag title=未分类>
											<B class=icoIbx></B>
										</TD>
										<TD class=Ibx_Td_Subject title="">
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_Date title="">18:39(五)</TD>
										<TD class=Ibx_Td_icoATCM></TD>
										<TD class=Ibx_Td_Size>
											<SPAN title="19,887 字节">19 K</SPAN>
										</TD>
									</TR>
									<TR class="I_Mark0 I_UnRd">
										<TD class=Ibx_Td_F>&nbsp;</TD>
										<TD class=Ibx_Td_Chkbx>
											<INPUT title=选择/不选 type=checkbox value=379:xtbBewcktUT-x2b5qAAAsm name=mid time="1236929126000" index="1" read="false">
										</TD>
										<TD class=Ibx_Td_icoInfo>
											<B class="icoIbx " title=未读(点击设为已读) type="markread"></B>
										</TD>
										<TD class=Ibx_Td_From title=''>
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_icoFlag title=未分类>
											<B class=icoIbx></B>
										</TD>
										<TD class=Ibx_Td_Subject title="">
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_Date title="">15:25(五)</TD>
										<TD class=Ibx_Td_icoATCM></TD>
										<TD class=Ibx_Td_Size>
											<SPAN title="11,737 字节">11 K</SPAN>
										</TD>
									</TR>
									<TR class="I_Mark0 I_UnRd">
										<TD class=Ibx_Td_F>&nbsp;</TD>
										<TD class=Ibx_Td_Chkbx>
											<INPUT title=选择/不选 type=checkbox value=379:xtbBexMktUT-x2ZbyAAAsw name=mid time="1236916339000" index="2" read="false">
										</TD>
										<TD class=Ibx_Td_icoInfo>
											<B class="icoIbx " title=未读(点击设为已读) type="markread"></B>
										</TD>
										<TD class=Ibx_Td_From title=colin@oceanmap.cn>
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_icoFlag title=未分类>
											<B class=icoIbx></B>
										</TD>
										<TD class=Ibx_Td_Subject title="">
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_Date title="">11:52(五)</TD>
										<TD class=Ibx_Td_icoATCM></TD>
										<TD class=Ibx_Td_Size>
											<SPAN title="375,612 字节">367 K</SPAN>
										</TD>
									</TR>
									<TR class="I_Mark0 I_UnRd">
										<TD class=Ibx_Td_F>&nbsp;</TD>
										<TD class=Ibx_Td_Chkbx>
											<INPUT title=选择/不选 type=checkbox value=360:xtbBaBEktUfQ-1JIHAAAsG name=mid time="1236913076000" index="3" read="false">
										</TD>
										<TD class=Ibx_Td_icoInfo>
											<B class="icoIbx " title=未读(点击设为已读) type="markread"></B>
										</TD>
										<TD class=Ibx_Td_From title=guoqiaotouzi@126.com>
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_icoFlag title=未分类>
											<B class=icoIbx></B>
										</TD>
										<TD class=Ibx_Td_Subject title=>
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_Date title="">10:57(五)</TD>
										<TD class=Ibx_Td_icoATCM></TD>
										<TD class=Ibx_Td_Size>
											<SPAN title="4,700 字节">5 K</SPAN>
										</TD>
									</TR>
									<TR class=I_Mark0>
										<TD class=Ibx_Td_F>&nbsp;</TD>
										<TD class=Ibx_Td_Chkbx>
											<INPUT title=选择/不选 type=checkbox value=379:xtbBewAktUT-x2YexAAAsq name=mid time="1236912568000" index="4" read="true">
										</TD>
										<TD class=Ibx_Td_icoInfo>
											<B class="icoIbx icoRead" title=""></B>
										</TD>
										<TD class=Ibx_Td_From title=''>
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_icoFlag title=未分类>
											<B class=icoIbx></B>
										</TD>
										<TD class=Ibx_Td_Subject title="">
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_Date title="">10:49(五)</TD>
										<TD class=Ibx_Td_icoATCM></TD>
										<TD class=Ibx_Td_Size>
											<SPAN title="5,148 字节">5 K</SPAN>
										</TD>
									</TR>
									<TR class="I_Mark0 I_UnRd">
										<TD class=Ibx_Td_F>&nbsp;</TD>
										<TD class=Ibx_Td_Chkbx>
											<INPUT title=选择/不选 type=checkbox value=360:xtbBaAUjtUfQ-1FwagAAsY name=mid time="1236882334000" index="5" read="false">
										</TD>
										<TD class=Ibx_Td_icoInfo>
											<B class="icoIbx " title=未读(点击设为已读) type="markread"></B>
										</TD>
										<TD class=Ibx_Td_From title="&quot;Printer's Parts &amp; Equipment&quot; <shabbir@printersparts.com>">
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_icoFlag title=未分类>
											<B class=icoIbx></B>
										</TD>
										<TD class=Ibx_Td_Subject title="">
											<A href="#">张三</A>
										</TD>
										<TD class=Ibx_Td_Date title="">02:25(五)</TD>
										<TD class=Ibx_Td_icoATCM></TD>
										<TD class=Ibx_Td_Size>
											<SPAN title="14,609 字节">14 K</SPAN>
										</TD>
									</TR>
									<TBODY></TBODY>
							</TABLE>
						</DIV>

						<H4 class=Ibx_Lst_bExtra id=oH4Check>选择：<A href="#" 
type=all>全部</A>&nbsp;-&nbsp;<A href="#" 
type=unread>未读</A>&nbsp;-&nbsp;<A href="#" 
type=read>已读</A>&nbsp;-&nbsp;<A href="#" 
type=reverse>反选</A>&nbsp;-&nbsp;<A href="#" 
type=no>不选</A></H4>
					</DIV>
					<DIV class="gToolbar gTbrBtm">

						<INPUT class="Btn BtnNml" hideFocus type=button value="删 除" outClass="Btn BtnNml ImpBtn" overClass="Btn BtnHv ImpBtn" action="move">
						<INPUT class="Btn BtnNml" hideFocus type=button value=举报垃圾邮件 outClass="Btn BtnNml" overClass="Btn BtnHv" action="reportYes">
						<SELECT class=Sel action="mark">
							<OPTION value=none selected>标记为...</OPTION>
							<OPTION value=read:true>&nbsp;&nbsp;已读邮件</OPTION>
							<OPTION value=read:false>&nbsp;&nbsp;未读邮件</OPTION>
						</SELECT>

						<SELECT class=Sel action="move">
							<OPTION value=none selected>移动到...</OPTION>
							<OPTION value=2>&nbsp;&nbsp;草稿箱</OPTION>
							<OPTION value=3>&nbsp;&nbsp;已发送</OPTION>
						</SELECT>

						<SELECT class=Sel action="view" url="#">
							<OPTION value=none selected>查看...</OPTION>
							<OPTION value=null>&nbsp;&nbsp;全部邮件</OPTION>
							<OPTION class=SelOptLine value=none>-------------</OPTION>
							<OPTION value=read:false>&nbsp;&nbsp;未读邮件</OPTION>
							<OPTION value=read:true>&nbsp;&nbsp;已读邮件</OPTION>
						</SELECT>
						<DIV class=Extra>
							<SPAN class=Txt><SPAN class=Unable>首页</SPAN>&nbsp;&nbsp;
							<SPAN class=Unable>上页</SPAN>&nbsp;&nbsp;
							<A href="#">下页</A>&nbsp;&nbsp;
							<A href="#">末页</A>
							</SPAN>
							<SELECT class=SelA style="MARGIN-RIGHT: 0px" action="page" url="list.jsp?sid=tBwkXRlgpHiyOGUAWsggoLGzpKgcUEYi&amp;fid=1">
								<OPTION value=1 selected>&nbsp;&nbsp;1/2</OPTION>
							</SELECT>
						</DIV>
					</DIV>
				</DIV>
			</DIV>
		</FORM>
		<!-- Surj 2008.08.08 list.js -->
	</BODY>

</HTML>