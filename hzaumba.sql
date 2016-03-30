-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-03-30 12:22:02
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hzaumba`
--

-- --------------------------------------------------------

--
-- 表的结构 `mba_administrator`
--

CREATE TABLE IF NOT EXISTS `mba_administrator` (
  `user` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mba_administrator`
--

INSERT INTO `mba_administrator` (`user`, `password`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `mba_contents`
--

CREATE TABLE IF NOT EXISTS `mba_contents` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `zxjj` text NOT NULL,
  `zzjg` text NOT NULL,
  `jyln` text NOT NULL,
  `mba_xm` text NOT NULL,
  `edp_xm` text NOT NULL,
  `xnds` text NOT NULL,
  `xwds` text NOT NULL,
  `hzqy` text NOT NULL,
  `zsxx` text NOT NULL,
  `pyfa` text NOT NULL,
  `lwzd` text NOT NULL,
  `glsj` text NOT NULL,
  `kcap` text NOT NULL,
  `dbap` text NOT NULL,
  `zyfz` text NOT NULL,
  `lhhzc` text NOT NULL,
  `org` text NOT NULL,
  `xyfc` text NOT NULL,
  `lxwm` text NOT NULL,
  `xwzx` text NOT NULL,
  `tzgg` text NOT NULL,
  `xxzs` text NOT NULL,
  `xxjw` text NOT NULL,
  `xzzx` text NOT NULL,
  `yqlj` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `mba_contents`
--

INSERT INTO `mba_contents` (`cid`, `zxjj`, `zzjg`, `jyln`, `mba_xm`, `edp_xm`, `xnds`, `xwds`, `hzqy`, `zsxx`, `pyfa`, `lwzd`, `glsj`, `kcap`, `dbap`, `zyfz`, `lhhzc`, `org`, `xyfc`, `lxwm`, `xwzx`, `tzgg`, `xxzs`, `xxjw`, `xzzx`, `yqlj`) VALUES
(1, '华中农业大学于2009年获批为MBA培养单位，属于第八批MBA培养院校。学校高度重视MBA项目的建设，坚持质量第一、规范管理、内涵发展的总体思路，致力于为我国中部地区中小企业和涉农企业培养高素质经营管理人才，取得了良好的办学效果。自2010年秋季MBA开始招生以来，截止2014年，累计招生282人，毕业148人，目前在校学生134人。\r\n发展环境\r\n（1）地域优势明显\r\n近年来，随着中部崛起战略的推进和长江经济带战略的实施，占有得天独厚地理位置优势的湖北省经济发展势头强劲，作为长江中游城市群代表的武汉市更是呈现出日新月异的面貌，一直保持10%以上的经济发展速度，2014年国民生产总值已超过1万亿元，在副省级城市中位列第三。经济的高速发展催生了对高层次管理人才的旺盛需求。广大中小企业已成为湖北省、武汉市经济发展中最有活力的重要组成部分，具有强烈的MBA教育需求，因而提高中小企业企业家及经营管理者的管理素质，为中小企业的发展提供智力支持具有较广阔的市场空间。华中农业大学作为在全国具有较高影响力的高校，具有较长的中小企业管理教学科研历史，地处武汉且能辐射华中各省，以中小企业管理作为MBA教育的主要培养方向具有一定优势。\r\n（2）学校高度重视\r\n自MBA教育开办以来，学校从多方面予以支持。一是组织保障，MBA教育开办以来，学校成立了由分管校长任组长的MBA教育领导小组、MBA教学指导委员会以及华中农业大学MBA教育中心。在研究生院的领导下，MBA教育中心依托经济管理学院对MBA招生、培养等环节进行统一管理。二是政策倾斜，建立了师资培养、教学激励等制度，支持MBA任课教师队伍建设，鼓励教师不断提升教学效果，并将MBA教研成果等作为职称评审与岗位考核的重要参考依据；三是经费支持，将70%的MBA学费留在学院发展MBA教育；安排1500平方米场地用于MBA教学和办公，先期投入300多万元用于MBA教学软硬件建设；后期为MBA课程建设、教学研究、师资培养和案例开发等提供每年50万元专项资金支持。\r\n（3）办学力量雄厚\r\n华中农业大学深厚的历史积淀为华中农业大学MBA教育注入了精神和灵魂，学校在农林经济管理、工商管理、法学、经济学等学科的雄厚办学实力为MBA教育发展提供了坚实的基础。经济管理学院现有农林经济管理一级学科博士点1个、农林经济管理博士后科研流动站1个，农村中小企业管理、农业贸易与农村金融管理、农业经济管理、林业经济管理等博士学位授权专业4个，工商管理、农林经济管理一级学科硕士点2个，企业管理、国际贸易学、产业经济学二级学科硕士点3个，建有湖北省人文社科重点研究基地1个，实验经济学与空间经济学实验室各1个，具有本科、硕士、博士及博士后完整的经管类人才培养体系，与英国哈珀亚当斯大学联合培养营销学本科生。学院现有专任教师90名，其中教授19人，副教授40人，博士生导师23人，国家现代农业产业技术体系经济学岗位科学家5人，国务院学位委员会学科评议组成员1名，“新世纪百千万人才工程”国家级人选1名，享受国务院政府特殊津贴专家1名，教育部教学指导委员会委员2名，教育部新世纪优秀人才支持计划6名，教育部高校青年教师奖获得者1名，霍英东青年教师奖获得者1名，省部级有突出贡献中青年专家3名，享受湖北省政府专项津贴人员1名，湖北省跨世纪学科带头人2名，湖北省“楚天学者”讲座教授2名，入选湖北省百人计划1名，湖北省新世纪高层次人才工程3名。\r\n（4）生源竞争激烈\r\n在华中农业大学MBA教育开办之初，湖北省已有6所MBA培养学校，第八、九批又有9所学校获得MBA培养资格，至今湖北省具备MBA培养资格的院校高达15所，其中13所在武汉市。培养历史较久的武汉大学、华中科技大学、中南财经政法大学三所高校占据了大部分生源份额。华中农业大学仅有5年MBA办学经验，与有多年MBA办学经验的院校相比，虽然我校MBA项目的社会知名度和办学经验还存在一定差距，但是依靠错位发展的竞争战略和严格的培养质量管理，我校MBA教育已在中部地区形成良好口碑并占有稳定的一席之地。\r\n发展思路\r\n（1）突出特色，错位发展\r\n华中农业大学MBA教育始终坚持突出特色、错位发展的思路，聚焦于为中小企业及涉农企业培养高层次管理人才。具体体现在招生、课程设置、教学内容、教学实习等方面。生源方面，我校MBA研究生60%以上来源于中小企业或涉农企业；课程设置方面，根据中小企业管理的需求，在选修课中开设了《领导科学与艺术》、《商法》、《企业社会责任》、《创业管理》等旨在提高学生自主创业能力的课程以及《农产品营销》、《现代生物技术》等涉农课程；教学内容方面，鼓励任课教师授课时多采用中小企业和涉农企业管理案例；教学实习方面，建立了“两江流域”（长江和汉江流域）教学科研基地，以水禽、柑橘、油菜、蔬菜、食用菌领域的5位产业经济学家承担的国家现代农业产业技术体系建设工作为平台,组织MBA研究生参与中小企业管理实践。\r\n（2）加大投入，夯实基础\r\n近五年来，学校和学院采取“多予、少取、放活”的方针，在师资队伍、办学条件、制度建设等方面加大投入，夯实了MBA办学基础。一是加强MBA师资队伍建设，每年拨出专款40万元用于MBA师资培训和案例开发。积极组织任课教师参加了历次由全国MBA教学指导委员会主办的师资培训，至2014年12月，100%的任课教师接受过MBA教学培训；MBA教育中心通过课题立项的方式鼓励任课教师进行案例开发，已资助案例开发项目4批18项，完成自主开发案例14项，其中两篇案例获全国“百篇优秀管理案例”奖。二是加强MBA教学的软硬件条件建设，在办学之初先期投入300万元建立了MBA专用图书室、MBA教学实习基地、MBA教学实验室、MBA专用教室、MBA专用案例讨论室等、购买了国泰安、创业之星、用友ERP等数据库和教学软件；MBA招生后，学校和学院每年共同投入50万元进一步改善办学条件，安排经费40万元用于MBA教师出国进修。三是加强MBA制度建设，组织专人在学习和借鉴兄弟院校经验的基础上建立了MBA管理制度体系并根据办学实践不断完善。\r\n（3）依照标准，规范办学\r\n在MBA教育领导小组和MBA教学指导委员会的指导下，参照兄弟院校的办学经验，按照MBA的办学规律及标准，制定了相关管理制度20余项，不断完善华中农业大学MBA教学管理体系和流程并严格执行，使我校MBA教育逐步步入规范化的轨道，确保了人才培养质量。MBA教学管理体系涵盖招生、教学、实践、毕业论文等多个环节，涉及学籍、考勤、奖惩、评教等多个方面。MBA人才培养流程包括了报到、注册、选课、开题、中期检查、毕业答辩等从入校到毕业的各个关键活动，规定了每个关键活动的时间节点和具体要求。如制定并严格执行《华中农业大学MBA学位论文规范》，实行严格的论文三审机制，每年因评审不合格而不能参加答辩的论文占提交论文总数的20%左右。\r\n（4）追求卓越，质量至上\r\n质量是MBA人才培养最重要的目标和考核标准。为了提高MBA人才培养质量，华中农业大学MBA教育中心从以下几个方面严加管理：一是严格任课教师和指导教师的选聘，任课教师和指导教师的选聘由MBA教学指导委员会在申请教师中按照规定条件进行遴选，并实施动态调整，学生满意度居于后10%的教师停止MBA教学资格一年，学生论文评价较低的指导老师停招MBA学生一年；二是通过走出去、请进来的方式鼓励MBA学生参与各种管理实践活动，办学5年来，坚持每年举办学术活动周，邀请人福科技王学海等企业家进入MBA课堂近50人次，组织MBA学生参加创业计划大赛、案例分析大赛、企业竞争模拟大赛等赛事；三是严把毕业论文关，MBA毕业论文除按规定抽取一定比例的盲评外，所有论文均需通过由MBA教育中心组织的三轮评审，合格后方可参加答辩，保证了MBA论文质量，所有MBA论文均顺利通过学校专业学位评定委员会审核。', '华中农业大学工商管理硕士教育指导委员会委员名单\r\n主任委员：\r\n李崇光 华中农业大学副校长、教授\r\n副主任委员：\r\n侯永旺 鄂尔多斯集团董事局董事 \r\n青 平 经济管理学院院长、教授 \r\n委    员：（以姓氏笔画为序）\r\n孙 剑 经济管理学院教授 \r\n李艳军 经济管理学院教授 \r\n严奉宪 经济管理学院教授 \r\n周德翼 经济管理学院教授  \r\n秘    书：余 戎', '愿景：打造中国一流、世界知名的MBA教育基地\r\n\r\n　　To become a leading provider of Chinese MBA education with a world-reknowed reputation\r\n\r\n　　使命：培养具有国际视野、兼备竞争意识与团队精神的中国工商管理精英\r\n\r\n　　To nurture a Chinese business elite with a global vision and an ertrepreneurial spirit through a combination of\r\n\r\n　　strong leadership and teamwork\r\n\r\n　　价值观：谋新求变  止于至善\r\n\r\n　　Knowledge,innovation,openness to change,striving for perfection', '华中农业大学MBA教育是中国最具影响力与品牌价值的MBA项目之一。 华中农业大学MBA教育基于“诚信、严谨、创新、卓越”的基本理念，以“凝聚精英、集聚智慧、重构未来、升华人生”作为其价值链的起点，以“专业导向、能力导向、素质导向、职业导向、市场导向”贯穿其价值链的全程，以“知识积累与能力提升并重、国际化视野与本土化创新并重、商业能力与社会责任并重、企业领袖魅力与企业公民意识并重”充实其价值链的关键环节，以凸显其价值链的核心优势。\r\n\r\n', '华中农业大学MBA教育是中国最具影响力与品牌价值的MBA项目之一。 华中农业大学MBA教育基于“诚信、严谨、创新、卓越”的基本理念，以“凝聚精英、集聚智慧、重构未来、升华人生”作为其价值链的起点，以“专业导向、能力导向、素质导向、职业导向、市场导向”贯穿其价值链的全程，以“知识积累与能力提升并重、国际化视野与本土化创新并重、商业能力与社会责任并重、企业领袖魅力与企业公民意识并重”充实其价值链的关键环节，以凸显其价值链的核心优势。\r\n', '我校相关专业教师结构合理，水平较高。现有能从事MBA教育的校内相关专业教师51人，其中教授13人，副教授26人，讲师12人，具有博士学位的和在读博士占教师比例的90%。教师队伍中，有国务院学位委员会农林经济管理学科评议组成员1人、享受国务院政府特殊津贴的专家4人、教育部教学指导委员会委员2人，新世纪百千万人才工程国家级人选1人、教育部高校青年教师奖获得者和教育部新世纪优秀人才支持计划入选者6人、省部级有突出贡献的中青年专家4人。“十五”以来，承担国家自然科学基金和国家社会科学基金32项，国际合作项目5项，其他省部级项目150余项，出版各类专著20部、教材16部（其中面向21世纪教材和全国高等教育“十五”国家级规划教材5部），列入国家“十一五”国家规划教材7部，公开发表论文1200余篇。所指导的研究生论文中有1篇博士论文被评为全国优秀博士论文，另有1篇获提名；有12篇博士论文被评为湖北省优秀博士论文，5篇硕士论文被评为湖北省优秀硕士论文。\r\n    我校相关教师国际交流合作频繁，具有从事MBA教育的国际化视野。近年来我校注重与国内外经济管理学术界的交流合作，美国、英国、加拿大、澳大利亚等国专家先后来我校经济管理学院讲学交流，我校先后派出20名教师赴美国、英国、澳大利亚等国家进行有关MBA、管理学方面的考察、进修或攻读学位，如蔡根女教授赴澳大利亚University of Melbourne进行农业企业管理学术访问；李崇光教授在美国Iowa State University商学院、University of Queensland进行农业企业工商管理硕士（MBA for Agribusiness）项目的学习；周德翼教授赴英国University of Sussex、荷兰Wageningen大学从事工商管理方面的合作研究，齐振宏教授赴英国City University进修工商管理，柳鹏程副教授在澳大利亚Sydney University、青平副教授在澳大利亚Monash University攻读农业经济学和商学硕士学位。教师的国际交流使得我校MBA教育的师资队伍能及时追踪国际MBA教育的发展动态，把最新的涉农企业、农业产业化的知识传授给MBA学员。\r\n    聘请的来自企业经营管理实践战线的兼职教师包括涉农企业的董事长、总裁等高层管理人员，他们都具有指导MBA学员的实践经验和知识水平。我校已聘请了湖北兴发集团、春都集团、福娃集团、宜化集团、襄樊正大、新华扬集团、上海新农饲料、深圳农产品有限公司、唐人神集团、海大集团、中国农产品交易股份有限公司（香港）等企业董事长、总裁等高层管理人员担任我校兼职教师。这些企业与我校建立了良好的合作关系，每年我校均有学生到这些企业进行教学实习，接受他们的指导。\r\n    聘请的兼职教授均具有较高的学术造诣和MBA指导经验。从国内外知名大学和科研机构聘请了一批兼职教授，如加拿大Brock University终身教授、MBA教育中心主任邓胜梁博士，澳大利亚University of Queensland供应链管理专家Ray Collins，美国国际食品政策研究所高级科学家游良志博士，台湾清华大学黄宗煌教授，中国驻联合国粮农组织国际贸易专家马有祥博士，国务院发展研究中心市场研究所国家贸易专家程国强博士，武汉大学经济与管理学院企业管理专家谭力文教授等。', '我校相关专业教师结构合理，水平较高。现有能从事MBA教育的校内相关专业教师51人，其中教授13人，副教授26人，讲师12人，具有博士学位的和在读博士占教师比例的90%。教师队伍中，有国务院学位委员会农林经济管理学科评议组成员1人、享受国务院政府特殊津贴的专家4人、教育部教学指导委员会委员2人，新世纪百千万人才工程国家级人选1人、教育部高校青年教师奖获得者和教育部新世纪优秀人才支持计划入选者6人、省部级有突出贡献的中青年专家4人。“十五”以来，承担国家自然科学基金和国家社会科学基金32项，国际合作项目5项，其他省部级项目150余项，出版各类专著20部、教材16部（其中面向21世纪教材和全国高等教育“十五”国家级规划教材5部），列入国家“十一五”国家规划教材7部，公开发表论文1200余篇。所指导的研究生论文中有1篇博士论文被评为全国优秀博士论文，另有1篇获提名；有12篇博士论文被评为湖北省优秀博士论文，5篇硕士论文被评为湖北省优秀硕士论文。\r\n    我校相关教师国际交流合作频繁，具有从事MBA教育的国际化视野。近年来我校注重与国内外经济管理学术界的交流合作，美国、英国、加拿大、澳大利亚等国专家先后来我校经济管理学院讲学交流，我校先后派出20名教师赴美国、英国、澳大利亚等国家进行有关MBA、管理学方面的考察、进修或攻读学位，如蔡根女教授赴澳大利亚University of Melbourne进行农业企业管理学术访问；李崇光教授在美国Iowa State University商学院、University of Queensland进行农业企业工商管理硕士（MBA for Agribusiness）项目的学习；周德翼教授赴英国University of Sussex、荷兰Wageningen大学从事工商管理方面的合作研究，齐振宏教授赴英国City University进修工商管理，柳鹏程副教授在澳大利亚Sydney University、青平副教授在澳大利亚Monash University攻读农业经济学和商学硕士学位。教师的国际交流使得我校MBA教育的师资队伍能及时追踪国际MBA教育的发展动态，把最新的涉农企业、农业产业化的知识传授给MBA学员。\r\n    聘请的来自企业经营管理实践战线的兼职教师包括涉农企业的董事长、总裁等高层管理人员，他们都具有指导MBA学员的实践经验和知识水平。我校已聘请了湖北兴发集团、春都集团、福娃集团、宜化集团、襄樊正大、新华扬集团、上海新农饲料、深圳农产品有限公司、唐人神集团、海大集团、中国农产品交易股份有限公司（香港）等企业董事长、总裁等高层管理人员担任我校兼职教师。这些企业与我校建立了良好的合作关系，每年我校均有学生到这些企业进行教学实习，接受他们的指导。\r\n    聘请的兼职教授均具有较高的学术造诣和MBA指导经验。从国内外知名大学和科研机构聘请了一批兼职教授，如加拿大Brock University终身教授、MBA教育中心主任邓胜梁博士，澳大利亚University of Queensland供应链管理专家Ray Collins，美国国际食品政策研究所高级科学家游良志博士，台湾清华大学黄宗煌教授，中国驻联合国粮农组织国际贸易专家马有祥博士，国务院发展研究中心市场研究所国家贸易专家程国强博士，武汉大学经济与管理学院企业管理专家谭力文教授等。', '', '华中农业大学是一所以农科为优势，以生命科学为特色，理、工、农、文、法、经、管等学科相结合的教育部直属全国重点大学，是“211工程”重点建设高校。校园位于武汉市南湖狮子山，占地面积7425亩（约5平方公里），校园三面环水，背靠青山，风景秀丽，环境幽雅，是理想的学习和科研园地。2009年经教育部和国务院学位委员会批准，我校获得全日制MBA教育试点单位资格，2010年起可面向全国招生。\r\n华中农业大学MBA教育中心依托于经济管理学院，该院师资力量雄厚，现有专任教师113人，其中博士生导师13人，教授20人，副教授35人，具有博士学位教师72人，聘请校外著名学者担任兼职教师36人；学院学科优势突出，现有农业经济管理、土地资源管理等博士学位授权点6个，企业管理、国际贸易等硕士学位授权点7个，其中农业经济管理二级学科为国家重点学科和湖北省优势学科，农林经济管理一级学科和土地资源管理二级学科为湖北省重点学科；学院科研实力强劲，下设农业经济管理系、土地管理系等6个系部，建有农林经济管理博士后科研流动站，设有湖北农村发展研究中心等10个研究机构及农业部经管总站华中农业大学农经服务中心，建有经济管理教学实验中心和土地资源管理教学实验中心，下设8个综合实验室。\r\n\r\n攻读华中农业大学工商管理硕士（MBA），将是您事业成功的起点！\r\n\r\n一、MBA报考条件：\r\n1．拥护中国共产党的领导，勤奋学习，愿意为社会主义现代化建设服务，品德良好，遵纪守法。\r\n2．大学本科毕业后有3年或3年以上工作经历；大专毕业后有5年或5年以上工作经历；已获硕士学位或博士学位并有2年或2年以上工作经历。\r\n3. 身体健康状况符合规定的体检标准。\r\n二、报考方式\r\n2011年全国硕士研究生招生考试报名仍采用网上报名与现场确认相结合的方式。所有考生在网上报名后均需在规定时间到报考点进行现场确认后报名信息方为有效。\r\n1．网报：考生须通过教育部指定网站（教育网址：http://yz.chsi.cn，公网网址：http://yz.chsi.com.cn）完成网上报名程序。时间为2010年10月10日—10月30日。（以教育部公布时间为准，逾期不再补报，也不得再修改报名信息。）\r\n2．现场确认：网报成功后考生本人需到选择的报考点进行现场确认报考信息、缴费、照像。（2010年11月10日—14日）\r\n3．现场工作流程：\r\n(1)验证→(2)缴费→(3)照相→(4)领取“信息卡”并校对签名→(5)交回“信息卡”→(6)报名结束\r\n未到现场缴费、照像、确认报名信息的考生，网报信息无效。\r\n三、注意事项\r\n1．考生在报名前请仔细核对本人条件是否符合报考要求，报考资格审查将在复试阶段进行。凡不符合报考条件的考生不予复试、录取。\r\n2．请考生仔细核对报名信息，报名信息为录取信息，姓名、身份证号、信息栏内选择的报考点、招生单位、专业等不能修改。考生自行承担以上失误造成的后果。\r\n3．考生选择报考点时要防止点击错误,一旦选定报考点就必须到该报考点缴费、照像、确认报名信息、参加考试。\r\n4．2011年1月1日-14日，考生凭网报用户名和密码登录中国研究生招生信息网（http://yz.chsi.com.cn/）下载打印《准考证》，招生单位不再给考生寄发《准考证》。\r\n    考生凭下载打印的《准考证》和本人有效身份证件参加初试。\r\n5．考生网报期间如需帮助，请致电0278728639。\r\n四、考试\r\n考试分初试和复试两个阶段。\r\n1．初试：\r\n（1）初试时间：2011年1月15日、16日，具体时间和考场见《准考证》。\r\n（2）考试科目：MBA联考英语、综合（数学、写作、逻辑）。\r\n（3）考试地点：考生报考点。\r\n2．复试：\r\n（1）复试时间：预计在2011年4月。\r\n（2）复试内容：\r\n①外语听力口语测试\r\n②以专业课笔试、综合面试等形式对考生的学科背景、基本素质、操作技能、思维能力、创新能力等进行考察。\r\n五、录取方式\r\n根据初试、复试成绩和对考生科研潜力、综合素质的考察结果，全面衡量考生各方面的表现，择优录取。\r\n六、培养\r\n1．学习方式：委托培养，周末上课或集中上课。\r\n2．学习年限：一般为2年。\r\n3．培养方向：中小企业管理、营销管理、供应链管理与食品安全控制、人力资源开发与管理。\r\n七、毕业及证书发放\r\n学习成绩合格，完成相关培养环节，通过学位论文答辩，经校学位评定委员会批准，授予工商管理硕士学位，同时颁发华中农业大学硕士研究生毕业证书。\r\n八、联系方式\r\n华中农业大学研究生处招生办公室\r\n地 址：湖北省武汉市洪山区狮子山 邮 编：430070\r\n电 话：（027）87280470\r\n联系人：张老师\r\n华中农业大学经济管理学院\r\n华中农业大学MBA教育中心\r\n电话：（027）87288717，87288639 传真： （027）87288639\r\n联系人：张老师  邹老师 ', '', '', '', '', '', '', '1', '2', '3', '邮箱：mba@mail.hzau.edu.cn\r\n联系电话：027-87282679\r\n联系人：宋丽波主任\r\n传真：027-87282973\r\n\r\n地址：湖北省武汉市洪山区南湖狮子山一号华中农业大学经济管理学院研究生教育中心  \r\n\r\n邮编：430070', '', '', '', '', '', ''),
(2, '中心简介', '组织机构', '教育理念', ' MBA项目', 'EDP项目', '校内导师', '校外导师', '合作企业', '招生信息', '培养方案', '论文指导', '管理实践', '课程安排', '答辩安排', '职业发展', '联合会章程', '组织机构', '校友风采', '联系我们', '新闻中心', '通知公告', '招生信息', '教务信息', '下载中心', '友情链接'),
(3, 'collapseOne', 'collapseOne', 'collapseOne', 'collapseTwo', 'collapseTwo', 'collapseThree', 'collapseThree', 'collapseThree', '', 'collapseFour', 'collapseFour', 'collapseFour', 'collapseFour', 'collapseFour', '', 'collapseFive', 'collapseFive', 'collapseFive', '', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero', 'collapseZero');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
