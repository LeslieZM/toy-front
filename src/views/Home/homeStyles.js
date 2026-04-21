const homeStyles = {
  navBar: {
    display: "flex", // activa donde vamos a colocar el logo y el menú
    flexDirection: "column", // coloca logo y menú en fila
  },
  topBar: {
    display: "flex",
    alignItems: "center",
    justifyContent: "space-between",
    padding: "10px 30px",
    backgroundColor: "#ffffff",
    color: "black"
  },
  logo: {
    height: "65px", // tamaño del logo
    
  },
  actions: {
    display: "flex",
    gap: "30px"
  },
  menubar: {
    background: "linear-gradient(90deg, #0a87f5, #005ecb)",
    alignItems: "center",

  }





};

export default homeStyles;