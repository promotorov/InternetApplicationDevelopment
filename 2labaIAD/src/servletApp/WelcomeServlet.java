package servletApp;

import beans.StudentsBean;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.GregorianCalendar;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.GregorianCalendar;
import java.util.Iterator;
import java.util.Map;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


public class WelcomeServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;
    private boolean correct=false;
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        request.getRequestDispatcher("/index.jsp").include(request, response);
    }//End doGet

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        try
        {
            System.out.println("does");
            PrintWriter writer=response.getWriter();
            request.getParameterValues("enterX");
            Map map=request.getParameterMap();
            String[] enterX=request.getParameterValues("enterX");
            String[] enterY=request.getParameterValues("enterY");
            String[] R=request.getParameterValues("enterR");
            int x=0;
            double y=0;
            double r=0;
            if(enterX.length!=1 || enterY.length!=1 || R.length!=1) {
                correct = false;
            }
            else {
                x = Integer.parseInt(enterX[0]);
                y = Double.parseDouble(enterY[0]);
                r = Double.parseDouble(R[0]);
                if(x>=-3 && x<=5 && y>=-3 && y<=3 && r>=2 && r<=5) correct=true;
                else correct=false;
            }
            if(map.size()!=3) correct=false;
            if(correct==false){
                request.getRequestDispatcher("/index.jsp").forward(request, response);
            }
            else{
                //writer.println("True....");
                request.setAttribute("enterX", x);
                request.setAttribute("enterY", y);
                request.setAttribute("enterR", r);
                request.getRequestDispatcher("/WEB-INF/AreaCheckApp").forward(request, response);
            }
        }
        catch(Exception exception)
        {
            request.getRequestDispatcher("/index.jsp").forward(request, response);
            exception.printStackTrace();
        }
    }
}
