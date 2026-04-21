import { useState } from "react";
import { TabMenu } from "primereact/tabmenu";
import homeStyles from "./homeStyles";
import logo from "../../assets/images/toy-play.png";
const Home = () => {
  const [activeIndex, setActiveIndex] = useState(0);

  const menu = [

    { label: "Bebes", icon: "pi pi-heart", url: "/toyBabys" },
    { label: "Niños", icon: "pi pi-users", url: "/toysKids" },
    { label: "Ubicación", icon: "pi pi-map", url: "/toyInfo" },
   

  ];

  return (
    <div style={homeStyles.navBar}>

  {/* BARRA SUPERIOR */}
  <div style={homeStyles.topBar}>

    {/* LOGO */}
    <img src={logo} style={homeStyles.logo} />

    {/* ACCIONES */}
    <div style={homeStyles.actions}>
      <span>👤 Usuario</span>
      <span>🛒 Carrito</span>
      <span>🚪 Salir</span>

    </div>

  </div>

  {/* 🔽 MENÚ */}
  <div style={homeStyles.menubar}>
    <TabMenu model={menu} />
  </div>

</div>
    
  );
};

export default Home;