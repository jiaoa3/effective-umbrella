import java.util.List;

public class CLIView implements IPlayersView {

    @Override
    public void display(List<Player> players) {
        for (Player player : players) {
            System.out.println(player.name);
        }
    }


    // non-static display

    // CLIView view1 = new CLIView(), view2 = new CLIView();
    // view1.display() != view2.display()

    // static display
    // CLIView view1 = new CLIView(), view2 = new CLIView();
    // wrong view1.display()
    // CLIView.display()
}
